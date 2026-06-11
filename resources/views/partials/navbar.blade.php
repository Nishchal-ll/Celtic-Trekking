<nav>
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">
            <svg class="nav-logo-icon" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polygon points="21,4 36,34 6,34" fill="none" stroke="#7ab4e8" stroke-width="2"/>
                <polygon points="21,10 32,30 10,30" fill="none" stroke="#7ab4e8" stroke-width="1.2"/>
                <circle cx="21" cy="21" r="4" fill="#7ab4e8"/>
            </svg>
            <div class="nav-logo-text">
                <span class="brand">Celtic Trekking</span>
                <span class="sub">Adventure</span>
            </div>
        </a>

        <ul class="nav-links">
            @forelse($menuItems as $item)
                <li><a href="{{ $item->url }}" @if($item->open_in_new_tab) target="_blank" rel="noopener" @endif>{{ $item->label }}</a></li>
            @empty
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('trekking.index') }}" class="{{ request()->routeIs('trekking.*') ? 'active' : '' }}">Trekking</a></li>
                <li><a href="{{ route('fixed-departures') }}" class="{{ request()->routeIs('fixed-departures') ? 'active' : '' }}">Fixed Departures</a></li>
                <li><a href="{{ route('agency') }}" class="{{ request()->routeIs('agency') ? 'active' : '' }}">Celtic Agency</a></li>
                <li><a href="{{ route('testimony') }}" class="{{ request()->routeIs('testimony') ? 'active' : '' }}">Testimonials</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            @endforelse
        </ul>
    </div>
</nav>
