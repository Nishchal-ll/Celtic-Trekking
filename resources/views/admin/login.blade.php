@extends('layouts.app')

@section('title', 'Admin Login')

@section('content')
<div class="auth-page" style="padding: 4rem 1rem; max-width: 420px; margin: 0 auto;">
    <div style="background: #ffffff; padding: 2rem; border-radius: 12px; box-shadow: 0 16px 40px rgba(0,0,0,.08);">
        <h1 style="margin-bottom: 1rem; font-size: 1.75rem;">Connexion administrateur</h1>

        @if($errors->any())
            <div style="margin-bottom: 1rem; color: #b91c1c;">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            <div style="margin-bottom: 1rem;">
                <label for="email" style="display:block; font-weight:600; margin-bottom:.4rem;">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus style="width:100%; padding:.75rem; border:1px solid #ddd; border-radius:8px;" />
            </div>

            <div style="margin-bottom: 1rem;">
                <label for="password" style="display:block; font-weight:600; margin-bottom:.4rem;">Mot de passe</label>
                <input id="password" type="password" name="password" required style="width:100%; padding:.75rem; border:1px solid #ddd; border-radius:8px;" />
            </div>

            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.5rem;">
                <label style="display:flex; align-items:center; gap:.5rem; font-size:.95rem;">
                    <input type="checkbox" name="remember" />
                    Se souvenir de moi
                </label>
            </div>

            <button type="submit" style="width:100%; padding:.95rem; background:#1a73e8; color:#fff; border:none; border-radius:8px; font-weight:700;">Se connecter</button>
        </form>

        <p style="margin-top:1rem; color:#555; font-size:.95rem;">Email: <strong>admin@example.com</strong><br>Mot de passe: <strong>password</strong></p>
    </div>
</div>
@endsection
