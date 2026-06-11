<!-- Footer -->
<footer id="footer-outer" class="footer-outer">
    <div class="container footer-main">
        <div class="footer-grid">
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    @forelse($footerLinks as $link)
                        <li><a href="{{ $link->url }}">{{ $link->title }}</a></li>
                    @empty
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('agency') }}">Celtic Agency</a></li>
                        <li><a href="{{ route('fixed-departures') }}">Fixed Departures</a></li>
                        <li><a href="{{ route('testimony') }}">Testimonials</a></li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2022 - Celtic Trekking</p>
        </div>
    </div>
</footer>
