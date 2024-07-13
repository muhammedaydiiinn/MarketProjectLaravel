@extends('admin.layout.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('register') }}" class="mt-5">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">İsim</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-posta Adresi</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control">
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Şifre Tekrarı</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Kayıt Ol</button>
        </form>
    </div>
@endsection
