<nav class="site-navigation">
  <div class="nav-inner">
    
    <a href="{{ url('/') }}" class="nav-logo">
      @if(isset($settings['logo']) && $settings['logo'])
        <img src="{{ asset('storage/' . $settings['logo']) }}" alt="Celtic Trekking logo" class="nav-logo-img">
      @else
        <svg class="nav-logo-icon" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
          <polygon points="21,4 36,34 6,34" fill="none" stroke="#7ab4e8" stroke-width="2"/>
          <polygon points="21,10 32,30 10,30" fill="none" stroke="#7ab4e8" stroke-width="1.2"/>
          <circle cx="21" cy="21" r="4" fill="#7ab4e8"/>
        </svg>
        <div class="nav-logo-text">
          <span class="brand">Celtic Trekking</span>
          <span class="sub">Adventure</span>
        </div>
      @endif
    </a>

    <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation menu" aria-expanded="false">
      <span class="hamburger-bar"></span>
      <span class="hamburger-bar"></span>
      <span class="hamburger-bar"></span>
    </button>

    <ul class="nav-links" id="navLinks">
      <li>
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
      </li>
      
      <li class="has-dropdown">
        <a href="{{ route('trekking.index') }}" class="{{ request()->routeIs('trekking.*') ? 'active' : '' }}">
          Trekking <i class="fa fa-angle-down dropdown-caret"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a href="{{ route('trekking.nepal') }}">Nepal Trekking</a></li>

        </ul>
      </li>

      <li>
        <a href="{{ route('fixed-departures') }}" class="{{ request()->routeIs('fixed-departures') ? 'active' : '' }}">Fixed Departures</a>
      </li>
      <li>
        <a href="{{ route('agency') }}" class="{{ request()->routeIs('agency') ? 'active' : '' }}">Celtic Agency</a>
      </li>
      <li>
        <a href="{{ route('testimony') }}" class="{{ request()->routeIs('testimony') ? 'active' : '' }}">Testimonials</a>
      </li>
      <li>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      </li>
    </ul>

  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menuToggle');
  const navLinks = document.getElementById('navLinks');
  const dropdownTrigger = document.querySelector('.has-dropdown > a');

  if (menuToggle && navLinks) {
    // Mobile Overlay Toggle Trigger Action
    menuToggle.addEventListener('click', function () {
      const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
      menuToggle.setAttribute('aria-expanded', !isExpanded);
      menuToggle.classList.toggle('open');
      navLinks.classList.toggle('open');
      document.body.style.overflow = !isExpanded ? 'hidden' : '';
    });

    // Touch Support for Dropdown Items on Mobile Display Views
    if (dropdownTrigger) {
      dropdownTrigger.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          this.parentElement.classList.toggle('dropdown-open');
        }
      });
    }

    // Close Mobile Drawer if Resized Passed Threshold Breakpoints
    window.addEventListener('resize', function () {
      if (window.innerWidth > 768 && navLinks.classList.contains('open')) {
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.classList.remove('open');
        navLinks.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }
});
</script>