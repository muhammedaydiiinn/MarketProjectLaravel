<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // User modelini ekleyin

class AuthManager extends Controller
{
    // Giriş formunu göster
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    // Giriş işlemi
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Başarılı giriş
            return redirect()->intended('/admin'); // Admin paneline yönlendir
        } else {
            // Başarısız giriş
            return redirect()->back()->withInput()->withErrors(['msg' => 'Giriş başarısız.']);
        }
    }

    // Kayıt formunu göster
    public function showRegisterForm()
    {
        return view('admin.auth.register');
    }

    // Kayıt işlemi
    public function register(Request $request)
    {
        // Validasyon kuralları
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Kullanıcıyı oluştur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Otomatik giriş yap
        Auth::login($user);

        // Başarılı kayıt
        return redirect()->route('login')->with('success', 'Kayıt işlemi başarıyla tamamlandı. Şimdi giriş yapabilirsiniz.');
    }

    // Çıkış işlemi
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('msg', 'Çıkış yapıldı.');
    }
}
