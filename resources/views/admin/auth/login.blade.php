@extends('admin.layout.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}" class="mt-5">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">E-posta Adresi</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>

        <p class="mt-3">Hesabınız yok mu? <a href="{{ route('register') }}">Kayıt Ol</a></p>
    </div>
@endsection
