@extends('layouts.app')

@section('title', 'Trek au Népal : Organisez treks et randonnées avec Celtic Trekking')

@section('content')

<!-- ============================================
     HERO SLIDER SECTION
     ============================================ -->
<section id="hero-slider" class="hero-slider">
    <div class="slider-wrapper">
        @foreach($heroSlides as $index => $slide)
        <div class="slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
            <div class="slide-image" style="background-image: url('{{ $slide['image'] }}');">
                <div class="slide-overlay"></div>
                <div class="slide-content">
                    <h2 class="slide-title">{{ $slide['title'] }}</h2>
                    <p class="slide-subtitle">{{ $slide['subtitle'] }}</p>
                    @if(isset($slide['link']))
                    <a href="{{ $slide['link'] }}" class="btn-slide">{{ $slide['button_text'] ?? 'En savoir plus' }}</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Slider Navigation Dots -->
    <div class="slider-dots">
        @foreach($heroSlides as $index => $slide)
        <button class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>

    <!-- Slider Arrows -->
    <button class="slider-arrow slider-prev" aria-label="Previous">
        <i class="fa fa-chevron-left"></i>
    </button>
    <button class="slider-arrow slider-next" aria-label="Next">
        <i class="fa fa-chevron-right"></i>
    </button>
</section>

<!-- ============================================
     HERO TAGLINE
     ============================================ -->
<section class="hero-tagline">
    <div class="container">
        <h2 class="tagline-text">Voyagez, marchez, découvrez avec Celtic Trekking</h2>
    </div>
</section>

<!-- ============================================
     DESTINATION CAROUSEL
     ============================================ -->
<section id="destinations" class="destinations-section">
    <div class="container">
        <div class="destinations-carousel">
            @foreach($destinations as $destination)
            <div class="destination-card">
                <div class="destination-image" style="background-image: url('{{ $destination['image'] }}');">
                    <div class="destination-overlay">
                        <h3 class="destination-name">{{ $destination['name'] }}</h3>
                        <p class="destination-description">{{ $destination['description'] }}</p>
                        <a href="{{ $destination['link'] }}" class="btn-destination">En savoir plus</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ============================================
     DESTINATION HIGHLIGHT CARDS
     (4 column destination grid)
     ============================================ -->
<section id="destination-highlights" class="destination-highlights-section">
    <div class="container">
        <div class="highlights-grid">
            <!-- Tibet -->
            <div class="highlight-card">
                <div class="highlight-image" style="background-image: url('{{ asset('images/trekking-tibet1.jpg') }}');">
                    <div class="highlight-overlay">
                        <h3 class="highlight-title">TIBET</h3>
                    </div>
                </div>
            </div>

            <!-- Népal -->
            <div class="highlight-card">
                <div class="highlight-image" style="background-image: url('{{ asset('images/trekking-nepal1.jpg') }}');">
                    <div class="highlight-overlay">
                        <h3 class="highlight-title">NÉPAL</h3>
                    </div>
                </div>
            </div>

            <!-- Maroc -->
            <div class="highlight-card">
                <div class="highlight-image" style="background-image: url('{{ asset('images/trekking-maroc1.jpg') }}');">
                    <div class="highlight-overlay">
                        <h3 class="highlight-title">MAROC</h3>
                    </div>
                </div>
            </div>

            <!-- Roumanie -->
            <div class="highlight-card">
                <div class="highlight-image" style="background-image: url('{{ asset('images/trekking-roumanie1.jpg') }}');">
                    <div class="highlight-overlay">
                        <h3 class="highlight-title">ROUMANIE</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="testimonials-wrapper">
            <!-- Contact Button -->
            <div class="testimonial-cta">
                <a href="{{ route('contact') }}" class="btn-contact">Contactez-nous</a>
            </div>

            <!-- Testimonial Slider -->
            <div class="testimonial-slider">
                @foreach($testimonials as $index => $testimonial)
                <div class="testimonial-slide {{ $index === 0 ? 'active' : '' }}" data-testimonial="{{ $index }}">
                    <div class="testimonial-icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <blockquote class="testimonial-quote">
                        "{{ $testimonial['quote'] }}"
                    </blockquote>
                    <cite class="testimonial-author">&minus; {{ $testimonial['author'] }}</cite>
                </div>
                @endforeach
            </div>

            <!-- Testimonial Navigation Dots -->
            <div class="testimonial-dots">
                @foreach($testimonials as $index => $testimonial)
                <button class="testimonial-dot {{ $index === 0 ? 'active' : '' }}" data-testimonial="{{ $index }}" aria-label="Testimonial {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CONTACT / CALL SECTION
     ============================================ -->
<section id="contact-info" class="contact-info-section">
    <div class="container">
        <div class="contact-info-wrapper">
            <p class="contact-text">
                N'hésitez pas à nous appeler si vous souhaitez une information
                ou si vous ne trouvez pas les bureaux :
            </p>
            <div class="contact-phones">
                <div class="phone-item">
                    <span class="phone-name">Uddhav :</span>
                    <a href="tel:+9779841786778" class="phone-number">9841 78 67 78</a>
                </div>
                <div class="phone-item">
                    <span class="phone-name">Krishna Raj :</span>
                    <a href="tel:+9779841413167" class="phone-number">9841 41 31 67</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* ============================================
       HERO SLIDER
       ============================================ */
    .hero-slider {
        position: relative;
        width: 100%;
        height: 85vh;
        min-height: 500px;
        max-height: 900px;
        overflow: hidden;
    }

    .slider-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s ease-in-out;
    }

    .slide.active {
        opacity: 1;
        z-index: 1;
    }

    .slide-image {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(
            to bottom,
            rgba(0, 0, 0, 0.15) 0%,
            rgba(0, 0, 0, 0.35) 50%,
            rgba(0, 0, 0, 0.55) 100%
        );
    }

    .slide-content {
        position: absolute;
        bottom: 15%;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        color: #fff;
        z-index: 2;
        width: 80%;
        max-width: 900px;
    }

    .slide-title {
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    }

    .slide-subtitle {
        font-family: 'Lato', sans-serif;
        font-size: 1.3rem;
        font-weight: 400;
        margin-bottom: 25px;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
    }

    .btn-slide {
        display: inline-block;
        padding: 14px 40px;
        background-color: #5090e2;
        color: #fff;
        text-decoration: none;
        font-family: 'Lato', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: 3px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-slide:hover {
        background-color: #3a7bd5;
        transform: translateY(-2px);
    }

    /* Slider Dots */
    .slider-dots {
        position: absolute;
        bottom: 25px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        display: flex;
        gap: 10px;
    }

    .slider-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.5);
        border: 2px solid rgba(255, 255, 255, 0.8);
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
    }

    .slider-dot.active {
        background-color: #fff;
        border-color: #fff;
    }

    .slider-dot:hover {
        background-color: rgba(255, 255, 255, 0.8);
    }

    /* Slider Arrows */
    .slider-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 3;
        background-color: rgba(0, 0, 0, 0.4);
        color: #fff;
        border: none;
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .slider-arrow:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .slider-prev {
        left: 0;
    }

    .slider-next {
        right: 0;
    }

    /* ============================================
       HERO TAGLINE
       ============================================ */
    .hero-tagline {
        background-color: #1a1a2e;
        padding: 28px 0;
        text-align: center;
    }

    .tagline-text {
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 1.6rem;
        color: #b0b8c8;
        font-weight: 400;
        letter-spacing: 3px;
        text-transform: none;
        margin: 0;
    }

    /* ============================================
       DESTINATIONS CAROUSEL
       ============================================ */
    .destinations-section {
        padding: 0;
        background-color: #fff;
    }

    .destinations-carousel {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
    }

    .destinations-carousel::-webkit-scrollbar {
        display: none;
    }

    .destination-card {
        flex: 0 0 33.333%;
        scroll-snap-align: start;
        position: relative;
        overflow: hidden;
    }

    .destination-image {
        width: 100%;
        height: 420px;
        background-size: cover;
        background-position: center;
        position: relative;
        cursor: pointer;
        transition: transform 0.5s ease;
    }

    .destination-image:hover {
        transform: scale(1.03);
    }

    .destination-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 30px 25px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0) 100%);
        color: #fff;
    }

    .destination-name {
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .destination-description {
        font-family: 'Lato', sans-serif;
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 15px;
        color: #e0e0e0;
    }

    .btn-destination {
        display: inline-block;
        padding: 10px 28px;
        background-color: #5090e2;
        color: #fff;
        text-decoration: none;
        font-family: 'Lato', sans-serif;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border: none;
        border-radius: 3px;
        transition: background-color 0.3s ease;
    }

    .btn-destination:hover {
        background-color: #3a7bd5;
    }

    /* ============================================
       DESTINATION HIGHLIGHTS (4-col grid)
       ============================================ */
    .destination-highlights-section {
        padding: 0;
        background-color: #fff;
    }

    .highlights-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 0;
    }

    .highlight-card {
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .highlight-image {
        width: 100%;
        height: 350px;
        background-size: cover;
        background-position: center;
        position: relative;
        transition: transform 0.5s ease;
    }

    .highlight-card:hover .highlight-image {
        transform: scale(1.05);
    }

    .highlight-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding-bottom: 30px;
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.6) 0%,
            rgba(0, 0, 0, 0.1) 50%,
            rgba(0, 0, 0, 0) 100%
        );
        transition: background 0.3s ease;
    }

    .highlight-card:hover .highlight-overlay {
        background: linear-gradient(
            to top,
            rgba(0, 0, 0, 0.75) 0%,
            rgba(0, 0, 0, 0.2) 50%,
            rgba(0, 0, 0, 0) 100%
        );
    }

    .highlight-title {
        font-family: 'PT Sans Narrow', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 3px;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
    }

    /* ============================================
       TESTIMONIALS SECTION
       ============================================ */
    .testimonials-section {
        background-color: #5090e2;
        padding: 70px 0;
        position: relative;
    }

    .testimonials-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .testimonial-cta {
        margin-bottom: 40px;
    }

    .btn-contact {
        display: inline-block;
        padding: 14px 45px;
        background-color: #0c3688;
        color: #fff;
        text-decoration: none;
        font-family: 'Lato', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border: none;
        border-radius: 3px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-contact:hover {
        background-color: #0a2d73;
        transform: translateY(-2px);
    }

    .testimonial-slider {
        position: relative;
        width: 100%;
        max-width: 800px;
        min-height: 150px;
    }

    .testimonial-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        text-align: center;
        opacity: 0;
        transition: opacity 0.6s ease-in-out;
    }

    .testimonial-slide.active {
        opacity: 1;
        position: relative;
    }

    .testimonial-icon {
        margin-bottom: 20px;
    }

    .testimonial-icon i {
        font-size: 1.8rem;
        color: #fff;
    }

    .testimonial-quote {
        font-family: 'Raleway', sans-serif;
        font-size: 1.4rem;
        font-weight: 400;
        font-style: italic;
        color: #fff;
        line-height: 1.6;
        margin: 0 0 20px 0;
        padding: 0 20px;
    }

    .testimonial-author {
        font-family: 'Lato', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.85);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-style: normal;
    }

    .testimonial-dots {
        display: flex;
        gap: 10px;
        margin-top: 30px;
        justify-content: center;
    }

    .testimonial-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.4);
        border: 2px solid rgba(255, 255, 255, 0.7);
        cursor: pointer;
        transition: all 0.3s ease;
        padding: 0;
    }

    .testimonial-dot.active {
        background-color: #fff;
        border-color: #fff;
    }

    .testimonial-dot:hover {
        background-color: rgba(255, 255, 255, 0.7);
    }

    /* ============================================
       CONTACT INFO SECTION
       ============================================ */
    .contact-info-section {
        background-color: #f5f5f5;
        padding: 50px 0;
    }

    .contact-info-wrapper {
        text-align: center;
    }

    .contact-text {
        font-family: 'Lato', sans-serif;
        font-size: 1.1rem;
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .contact-phones {
        display: flex;
        justify-content: center;
        gap: 50px;
        flex-wrap: wrap;
    }

    .phone-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .phone-name {
        font-family: 'Lato', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        color: #333;
    }

    .phone-number {
        font-family: 'Lato', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: #5090e2;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .phone-number:hover {
        color: #0c3688;
    }

    /* ============================================
       RESPONSIVE STYLES
       ============================================ */
    @media (max-width: 1024px) {
        .destination-card {
            flex: 0 0 50%;
        }

        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .slide-title {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .hero-slider {
            height: 60vh;
            min-height: 350px;
        }

        .slide-title {
            font-size: 2rem;
        }

        .slide-subtitle {
            font-size: 1rem;
        }

        .tagline-text {
            font-size: 1.2rem;
            letter-spacing: 1px;
        }

        .destination-card {
            flex: 0 0 100%;
        }

        .destination-image {
            height: 320px;
        }

        .highlights-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .highlight-image {
            height: 250px;
        }

        .testimonial-quote {
            font-size: 1.1rem;
        }

        .contact-phones {
            flex-direction: column;
            gap: 15px;
        }

        .slider-arrow {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
    }

    @media (max-width: 480px) {
        .hero-slider {
            height: 50vh;
            min-height: 280px;
        }

        .slide-title {
            font-size: 1.5rem;
        }

        .slide-subtitle {
            font-size: 0.9rem;
        }

        .highlights-grid {
            grid-template-columns: 1fr;
        }

        .highlight-image {
            height: 220px;
        }

        .highlight-title {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ===== Hero Slider =====
    const heroSlider = {
        slides: document.querySelectorAll('.slide'),
        dots: document.querySelectorAll('.slider-dot'),
        prevBtn: document.querySelector('.slider-prev'),
        nextBtn: document.querySelector('.slider-next'),
        currentIndex: 0,
        autoPlayInterval: null,
        autoPlayDelay: 5000,

        init() {
            if (this.slides.length === 0) return;

            this.dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    this.goTo(parseInt(dot.dataset.slide));
                });
            });

            this.prevBtn.addEventListener('click', () => this.prev());
            this.nextBtn.addEventListener('click', () => this.next());

            this.startAutoPlay();

            const sliderEl = document.getElementById('hero-slider');
            sliderEl.addEventListener('mouseenter', () => this.stopAutoPlay());
            sliderEl.addEventListener('mouseleave', () => this.startAutoPlay());
        },

        goTo(index) {
            this.slides[this.currentIndex].classList.remove('active');
            this.dots[this.currentIndex].classList.remove('active');
            this.currentIndex = index;
            this.slides[this.currentIndex].classList.add('active');
            this.dots[this.currentIndex].classList.add('active');
        },

        next() {
            const nextIndex = (this.currentIndex + 1) % this.slides.length;
            this.goTo(nextIndex);
        },

        prev() {
            const prevIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
            this.goTo(prevIndex);
        },

        startAutoPlay() {
            this.autoPlayInterval = setInterval(() => this.next(), this.autoPlayDelay);
        },

        stopAutoPlay() {
            clearInterval(this.autoPlayInterval);
        }
    };

    heroSlider.init();

    // ===== Testimonial Slider =====
    const testimonialSlider = {
        slides: document.querySelectorAll('.testimonial-slide'),
        dots: document.querySelectorAll('.testimonial-dot'),
        currentIndex: 0,
        autoPlayInterval: null,
        autoPlayDelay: 4000,

        init() {
            if (this.slides.length === 0) return;

            this.dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    this.goTo(parseInt(dot.dataset.testimonial));
                });
            });

            this.startAutoPlay();
        },

        goTo(index) {
            this.slides[this.currentIndex].classList.remove('active');
            this.dots[this.currentIndex].classList.remove('active');
            this.currentIndex = index;
            this.slides[this.currentIndex].classList.add('active');
            this.dots[this.currentIndex].classList.add('active');
        },

        next() {
            const nextIndex = (this.currentIndex + 1) % this.slides.length;
            this.goTo(nextIndex);
        },

        startAutoPlay() {
            this.autoPlayInterval = setInterval(() => this.next(), this.autoPlayDelay);
        },

        stopAutoPlay() {
            clearInterval(this.autoPlayInterval);
        }
    };

    testimonialSlider.init();

});
</script>
@endpush
