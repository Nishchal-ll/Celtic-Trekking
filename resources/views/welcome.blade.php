@extends('layouts.app')

@section('title', __('home.meta_title'))
@section('meta_description', __('home.meta_description'))

@section('content')
    <!-- Hero Slider -->
    <section class="hero-slider" id="hero-slider">
        <div class="slides-container">
            @forelse($slides ?? [] as $index => $slide)
                <div class="slide {{ $index === 0 ? 'active' : '' }}" style="background-image: url('{{ asset('storage/' . $slide->image) }}')">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h1 class="slide-title">{{ $slide->title }}</h1>
                        @if($slide->subtitle)
                            <p class="slide-subtitle">{{ $slide->subtitle }}</p>
                        @endif
                        @if($slide->link)
                            <a href="{{ $slide->link }}" class="btn btn-primary btn-lg">
                                {{ $slide->button_text ?? __('home.discover') }}
                            </a>
                        @endif
                    </div>
                </div>
            @empty
                <!-- Default slide if no slides in database -->
                <div class="slide active" style="background-image: url('{{ asset('images/hero-default.jpg') }}')">
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h1 class="slide-title">@lang('home.hero_title')</h1>
                        <p class="slide-subtitle">@lang('home.hero_subtitle')</p>
                        <a href="{{ route('trekking.index') }}" class="btn btn-primary btn-lg">
                            @lang('home.discover')
                        </a>
                    </div>
                </div>
            @endforelse
        </div>

        <!-- Slider Controls -->
        <button class="slider-btn slider-btn-prev" id="slider-prev" aria-label="Previous slide">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="15 18 9 12 15 6"/>
            </svg>
        </button>
        <button class="slider-btn slider-btn-next" id="slider-next" aria-label="Next slide">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <polyline points="9 18 15 12 9 6"/>
            </svg>
        </button>

        <!-- Slider Dots -->
        <div class="slider-dots" id="slider-dots">
            @forelse($slides ?? [] as $index => $slide)
                <button class="dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}"></button>
            @empty
                <button class="dot active" data-index="0" aria-label="Go to slide 1"></button>
            @endforelse
        </div>
    </section>

    <!-- Destinations Section -->
    <section class="destinations-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">@lang('home.destinations_title')</h2>
                <p class="section-subtitle">@lang('home.destinations_subtitle')</p>
            </div>

            <div class="destinations-grid">
                @forelse($destinations ?? [] as $destination)
                    <a href="{{ route('trekking.show', $destination) }}" class="destination-card">
                        <div class="destination-image">
                            <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" loading="lazy">
                            <div class="destination-overlay"></div>
                        </div>
                        <div class="destination-content">
                            <h3 class="destination-name">{{ $destination->name }}</h3>
                            <p class="destination-country">{{ $destination->country }}</p>
                            <span class="destination-link">
                                @lang('home.explore')
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                    <polyline points="12 5 19 12 12 19"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                @empty
                    <!-- Default destinations -->
                    @foreach([
                        ['name' => 'Tibet', 'country' => 'China', 'image' => 'tibet.jpg'],
                        ['name' => 'Nepal', 'country' => 'Nepal', 'image' => 'nepal.jpg'],
                        ['name' => 'Maroc', 'country' => 'Morocco', 'image' => 'morocco.jpg'],
                        ['name' => 'Roumanie', 'country' => 'Romania', 'image' => 'romania.jpg'],
                    ] as $dest)
                        <a href="#" class="destination-card">
                            <div class="destination-image">
                                <img src="{{ asset('images/destinations/' . $dest['image']) }}" alt="{{ $dest['name'] }}" loading="lazy">
                                <div class="destination-overlay"></div>
                            </div>
                            <div class="destination-content">
                                <h3 class="destination-name">{{ $dest['name'] }}</h3>
                                <p class="destination-country">{{ $dest['country'] }}</p>
                                <span class="destination-link">
                                    @lang('home.explore')
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <line x1="5" y1="12" x2="19" y2="12"/>
                                        <polyline points="12 5 19 12 12 19"/>
                                    </svg>
                                </span>
                            </div>
                        </a>
                    @endforeach
                @endforelse
            </div>

            <div class="section-cta">
                <a href="{{ route('trekking.index') }}" class="btn btn-outline">
                    @lang('home.view_all_destinations')
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">@lang('home.feature_1_title')</h3>
                    <p class="feature-description">@lang('home.feature_1_description')</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">@lang('home.feature_2_title')</h3>
                    <p class="feature-description">@lang('home.feature_2_description')</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">@lang('home.feature_3_title')</h3>
                    <p class="feature-description">@lang('home.feature_3_description')</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">@lang('home.testimonials_title')</h2>
                <p class="section-subtitle">@lang('home.testimonials_subtitle')</p>
            </div>

            <div class="testimonials-slider" id="testimonials-slider">
                <div class="testimonials-container">
                    @forelse($testimonials ?? [] as $index => $testimonial)
                        <div class="testimonial-card {{ $index === 0 ? 'active' : '' }}">
                            <div class="testimonial-quote">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor" opacity="0.2">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">{{ $testimonial->content }}</p>
                            <div class="testimonial-author">
                                @if($testimonial->avatar)
                                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" class="author-avatar">
                                @else
                                    <div class="author-avatar-placeholder">
                                        {{ substr($testimonial->name, 0, 1) }}
                                    </div>
                                @endif
                                <div class="author-info">
                                    <span class="author-name">{{ $testimonial->name }}</span>
                                    @if($testimonial->location)
                                        <span class="author-location">{{ $testimonial->location }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="testimonial-rating">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="star {{ $i <= $testimonial->rating ? 'filled' : '' }}" width="20" height="20" viewBox="0 0 24 24" fill="{{ $i <= $testimonial->rating ? 'currentColor' : 'none' }}" stroke="currentColor" stroke-width="2">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    @empty
                        <!-- Default testimonials -->
                        <div class="testimonial-card active">
                            <div class="testimonial-quote">
                                <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor" opacity="0.2">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">Une experience inoubliable au Nepal avec Celtic Trekking. Les guides etaient exceptionnels et l'organisation parfaite.</p>
                            <div class="testimonial-author">
                                <div class="author-avatar-placeholder">M</div>
                                <div class="author-info">
                                    <span class="author-name">Marie Dupont</span>
                                    <span class="author-location">Paris, France</span>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Testimonials Navigation -->
                <div class="testimonials-nav">
                    <button class="testimonial-nav-btn" id="testimonial-prev" aria-label="Previous testimonial">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="15 18 9 12 15 6"/>
                        </svg>
                    </button>
                    <button class="testimonial-nav-btn" id="testimonial-next" aria-label="Next testimonial">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="9 18 15 12 9 6"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="section-cta">
                <a href="{{ route('testimony') }}" class="btn btn-outline">
                    @lang('home.view_all_testimonials')
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-background" style="background-image: url('{{ asset('images/cta-background.jpg') }}')">
            <div class="cta-overlay"></div>
        </div>
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">@lang('home.cta_title')</h2>
                <p class="cta-text">@lang('home.cta_text')</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact.index') }}" class="btn btn-primary btn-lg">
                        @lang('home.contact_us')
                    </a>
                    <a href="tel:+33298000000" class="btn btn-outline-white btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                        +33 (0)2 98 00 00 00
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hero Slider
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.getElementById('slider-prev');
        const nextBtn = document.getElementById('slider-next');
        let currentSlide = 0;
        let slideInterval;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
            currentSlide = index;
        }

        function nextSlide() {
            const next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function prevSlide() {
            const prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        function startAutoSlide() {
            slideInterval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        if (slides.length > 1) {
            prevBtn.addEventListener('click', () => {
                stopAutoSlide();
                prevSlide();
                startAutoSlide();
            });

            nextBtn.addEventListener('click', () => {
                stopAutoSlide();
                nextSlide();
                startAutoSlide();
            });

            dots.forEach((dot, i) => {
                dot.addEventListener('click', () => {
                    stopAutoSlide();
                    showSlide(i);
                    startAutoSlide();
                });
            });

            startAutoSlide();
        }

        // Testimonials Slider
        const testimonials = document.querySelectorAll('.testimonial-card');
        const testimonialPrev = document.getElementById('testimonial-prev');
        const testimonialNext = document.getElementById('testimonial-next');
        let currentTestimonial = 0;

        function showTestimonial(index) {
            testimonials.forEach((t, i) => {
                t.classList.toggle('active', i === index);
            });
            currentTestimonial = index;
        }

        if (testimonials.length > 1) {
            testimonialPrev.addEventListener('click', () => {
                const prev = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
                showTestimonial(prev);
            });

            testimonialNext.addEventListener('click', () => {
                const next = (currentTestimonial + 1) % testimonials.length;
                showTestimonial(next);
            });

            // Auto-rotate testimonials
            setInterval(() => {
                const next = (currentTestimonial + 1) % testimonials.length;
                showTestimonial(next);
            }, 6000);
        }
    });
</script>
@endpush
