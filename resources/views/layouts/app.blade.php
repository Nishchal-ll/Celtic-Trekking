<!DOCTYPE html>
<html lang="en" translate="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="google" content="notranslate">
    <meta name="description" content="Celtic Trekking is 20 years of experience, with local professional teams to support you: Nepal, Tibet, Romania and Morocco.">
    <meta name="keywords" content="trek, népal, tibet, maroc, roumanie, randonnée, trekking, celtic trekking, everest, himalaya">
    <title>@yield('title', 'Nepal Trekking: Plan treks and hikes with Celtic Trekking')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;700&family=Lato:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    @stack('styles')
</head>
<body>

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Cookie Banner -->
    @include('partials.cookie-banner')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')

</body>
</html>
