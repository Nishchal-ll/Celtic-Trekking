@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="admin-dashboard" style="padding: 4rem 1rem; max-width: 680px; margin: 0 auto;">
    <div style="background: #ffffff; padding: 2rem; border-radius: 12px; box-shadow: 0 16px 40px rgba(0,0,0,.08);">
        <h1 style="margin-bottom: .75rem;">Espace administrateur</h1>
        <p style="margin-bottom: 1.5rem; color: #555;">Vous êtes connecté avec succès en tant qu'administrateur.</p>

        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" style="padding:.95rem 1.25rem; background:#1a73e8; color:#fff; border:none; border-radius:8px; font-weight:700;">Se déconnecter</button>
        </form>
    </div>
</div>
@endsection
