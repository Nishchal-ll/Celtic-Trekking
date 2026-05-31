<!-- Header -->
<header id="header-outer" class="header-outer">
    <div class="container header-inner">
        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo-celtic-trekking.png') }}" alt="Celtic Trekking Adventure" class="logo-img">
                <div class="logo-text">
                    <span class="logo-title">CELTIC TREKKING</span>
                    <span class="logo-subtitle">Adventure</span>
                </div>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav id="main-nav" class="main-nav">
            <ul class="nav-menu">
                <li class="menu-item">
                    <a href="{{ url('/') }}">ACCUEIL</a>
                </li>
                <li class="menu-item has-dropdown">
                    <a href="{{ route('trekking.index') }}">TREKKING</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('trekking.nepal') }}">TREKKING NÉPAL</a></li>
                        <li><a href="{{ route('trekking.tibet') }}">TREKKING TIBET</a></li>
                        <li><a href="{{ route('trekking.maroc') }}">TREKKING MAROC</a></li>
                        <li><a href="{{ route('trekking.roumanie') }}">TREKKING ROUMANIE</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ route('fixed-departures') }}">DÉPARTS FIXES</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('agency') }}">L'AGENCE CELTIC</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('testimony') }}">TÉMOIGNAGE</a>
                </li>
            </ul>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Menu">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <nav id="mobile-nav" class="mobile-nav">
        <ul class="mobile-nav-menu">
            <li><a href="{{ url('/') }}">ACCUEIL</a></li>
            <li class="has-submenu">
                <a href="{{ route('trekking.index') }}">TREKKING</a>
                <ul class="submenu">
                    <li><a href="{{ route('trekking.nepal') }}">TREKKING NÉPAL</a></li>
                    <li><a href="{{ route('trekking.tibet') }}">TREKKING TIBET</a></li>
                    <li><a href="{{ route('trekking.maroc') }}">TREKKING MAROC</a></li>
                    <li><a href="{{ route('trekking.roumanie') }}">TREKKING ROUMANIE</a></li>
                </ul>
            </li>
            <li><a href="{{ route('fixed-departures') }}">DÉPARTS FIXES</a></li>
            <li><a href="{{ route('agency') }}">L'AGENCE CELTIC</a></li>
            <li><a href="{{ route('testimony') }}">TÉMOIGNAGE</a></li>
        </ul>
    </nav>
</header>
