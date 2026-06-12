<!-- Header -->
<header id="header-outer" class="header-outer">
    <div class="container header-inner">
        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset(isset($settings['logo']) && $settings['logo'] ? 'storage/' . $settings['logo'] : 'images/logo-celtic-trekking.png') }}" alt="Celtic Trekking Adventure" class="logo-img">
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
                    <a href="{{ url('/') }}">HOME</a>
                </li>
                <li class="menu-item has-dropdown">
                    <a href="{{ route('trekking.index') }}">TREKKING</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('trekking.nepal') }}">NEPAL TREKKING</a></li>
                        <li><a href="{{ route('trekking.tibet') }}">TIBET TREKKING</a></li>
                        <li><a href="{{ route('trekking.maroc') }}">MOROCCO TREKKING</a></li>
                        <li><a href="{{ route('trekking.roumanie') }}">ROMANIA TREKKING</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="{{ route('fixed-departures') }}">FIXED DEPARTURES</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('agency') }}">CELTIC AGENCY</a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('testimony') }}">TESTIMONIALS</a>
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
            <li><a href="{{ url('/') }}">HOME</a></li>
            <li class="has-submenu">
                <a href="{{ route('trekking.index') }}">TREKKING</a>
                <ul class="submenu">
                    <li><a href="{{ route('trekking.nepal') }}">NEPAL TREKKING</a></li>
                    <li><a href="{{ route('trekking.tibet') }}">TIBET TREKKING</a></li>
                    <li><a href="{{ route('trekking.maroc') }}">MOROCCO TREKKING</a></li>
                    <li><a href="{{ route('trekking.roumanie') }}">ROMANIA TREKKING</a></li>
                </ul>
            </li>
            <li><a href="{{ route('fixed-departures') }}">FIXED DEPARTURES</a></li>
            <li><a href="{{ route('agency') }}">CELTIC AGENCY</a></li>
            <li><a href="{{ route('testimony') }}">TESTIMONIALS</a></li>
        </ul>
    </nav>
</header>
