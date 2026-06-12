<footer id="footer-outer" class="footer-outer">
    <div class="container footer-main">
        <div class="footer-grid">
            
            <div class="footer-col">
                <h4 class="footer-heading">Quick Links</h4>
                <ul class="footer-links">
                    @forelse($footerLinks ?? [] as $link)
                        <li><a href="{{ $link->url }}">{{ $link->title }}</a></li>
                    @empty
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('agency') }}">Celtic Agency</a></li>
                        <li><a href="{{ route('fixed-departures') }}">Fixed Departures</a></li>
                        <li><a href="{{ route('testimony') }}">Testimonials</a></li>
                        <li><a href="{{ route('legal') }}">Legal Notice</a></li>
                    @endforelse
                </ul>
            </div>

            <div class="footer-col footer-about">
                <h4 class="footer-heading">About Us</h4>
                <p class="about-brand-text">{{ $settings['site_name'] ?? 'Celtic Trekking Adventure (P.) Ltd.' }}</p>
                
                <div class="footer-contact-info">
                    @if(!empty($settings['opening_time']))
                        <p><strong>Opening:</strong> {{ $settings['opening_time'] }}</p>
                    @endif
                    @if(!empty($settings['closing_time']))
                        <p><strong>Closing:</strong> {{ $settings['closing_time'] }}</p>
                    @endif
                </div>

                @if(!empty($settings['facebook_url']) || !empty($settings['instagram_url']) || !empty($settings['twitter_url']) || !empty($settings['youtube_url']))
                    <div class="footer-social-links-row">
                        @if(!empty($settings['facebook_url']))
                            <a href="{{ $settings['facebook_url'] }}" target="_blank" rel="noopener" title="Facebook"><i class="fa fa-facebook"></i></a>
                        @endif
                        @if(!empty($settings['instagram_url']))
                            <a href="{{ $settings['instagram_url'] }}" target="_blank" rel="noopener" title="Instagram"><i class="fa fa-instagram"></i></a>
                        @endif
                        @if(!empty($settings['twitter_url']))
                            <a href="{{ $settings['twitter_url'] }}" target="_blank" rel="noopener" title="Twitter"><i class="fa fa-twitter"></i></a>
                        @endif
                        @if(!empty($settings['youtube_url']))
                            <a href="{{ $settings['youtube_url'] }}" target="_blank" rel="noopener" title="YouTube"><i class="fa fa-youtube"></i></a>
                        @endif
                    </div>
                @endif
            </div>

            <div class="footer-col footer-location">
                <h4 class="footer-heading">Location</h4>
                @if(!empty($settings['address']))
                    <p class="address-paragraph">{{ $settings['address'] }}</p>
                @endif
                <div class="meta-contact-lines">
                    @if(!empty($settings['phone']))
                        <p><strong>Phone:</strong> {{ $settings['phone'] }}</p>
                    @endif
                    @if(!empty($settings['email']))
                        <p><strong>Email:</strong> <a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a></p>
                    @endif
                </div>
                @if(!empty($settings['map_embed']))
                    <div class="map-viewport-wrapper footer-map">
                        {!! $settings['map_embed'] !!}
                    </div>
                @endif
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; 2026 - Celtic Trekking. All rights reserved.</p>
            <p class="developer-credit-line">Designed and developed by <a href="http://www.acharyanishchal.com.np" target="_blank" rel="noopener noreferrer">Nishchal</a></p>
        </div>
    </div>
</footer>