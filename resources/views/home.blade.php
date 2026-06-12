<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  
  <title>Nepal Trekking: Plan treks and hikes with Celtic Trekking</title>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="hero-slider" id="hero-slider">
  <div class="slider-wrapper">
    @forelse($slides as $index => $slide)
      <div class="slide {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}">
        <div class="slide-image" style="background-image: url('{{ asset('storage/' . $slide->image) }}');">
          <div class="slide-overlay"></div>
          <div class="slide-content">
            <h2 class="slide-title">{{ $slide->title }}</h2>
            @if($slide->subtitle)
              <p class="slide-subtitle">{{ $slide->subtitle }}</p>
            @endif
            <div class="slide-actions">
              @if($slide->link)
                <a href="{{ $slide->link }}" class="btn-slide">{{ $slide->button_text ?? __('home.discover') }}</a>
              @endif
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="slide active" data-slide="0">
        <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1600&q=80');">
          <div class="slide-overlay"></div>
          <div class="slide-content">
            <h2 class="slide-title">Discover the World on Foot</h2>
            <p class="slide-subtitle">Authentic trekking experiences in the most beautiful regions of the world</p>
            <div class="slide-actions">
              <a href="{{ route('trekking.index') }}" class="btn-slide">Explore Our Treks</a>
            </div>
          </div>
        </div>
      </div>
    @endforelse
  </div>

  <div class="slider-dots">
    @foreach($slides as $index => $slide)
      <button class="slider-dot {{ $index === 0 ? 'active' : '' }}" data-slide="{{ $index }}"></button>
    @endforeach
    
    @unless($slides->count())
      <button class="slider-dot active" data-slide="0"></button>
      <button class="slider-dot" data-slide="1"></button>
      <button class="slider-dot" data-slide="2"></button>
    @endunless
  </div>
</section>

<section class="hero-tagline">
  <div class="container-inner">
    <div class="tagline-wrap">
      <h2 class="tagline-text">Travel, walk, discover with Celtic Trekking</h2>
      <div class="tagline-accent-line"></div>
    </div>
  </div>
</section>

<section class="destinations-section">
  <div class="container-inner">
    <div class="destinations-grid">
      @forelse($destinations as $destination)
        <a href="{{ $destination->link }}" class="destination-card">
          <div class="destination-image" style="background-image: url('{{ asset('storage/' . $destination->image) }}');"></div>
          <div class="destination-meta">
            <span class="destination-country">{{ $destination->name }}</span>
          </div>
        </a>
      @empty
        <a href="#" class="destination-card">
          <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1516912481808-3406841bd33c?auto=format&fit=crop&w=600&q=80');"></div>
          <div class="destination-meta"><span class="destination-country">Tibet</span></div>
        </a>
        <a href="#" class="destination-card">
          <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=600&q=80');"></div>
          <div class="destination-meta"><span class="destination-country">Nepal</span></div>
        </a>
        <a href="#" class="destination-card">
          <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1504432842672-1a4d20ad2bb5?auto=format&fit=crop&w=600&q=80');"></div>
          <div class="destination-meta"><span class="destination-country">Maroc</span></div>
        </a>
        <a href="#" class="destination-card">
          <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1469521669194-babb45599def?auto=format&fit=crop&w=600&q=80');"></div>
          <div class="destination-meta"><span class="destination-country">Roumanie</span></div>
        </a>
      @endforelse
    </div>
  </div>
</section>

<section class="testimonials-banner-section">
  <div class="banner-inner">
    
    <div class="banner-left">
      <div class="brand-icons-row">
        <i class="fa fa-heart"></i>
        <span class="vertical-pipe"></span>
        <i class="fa fa-heart"></i>
      </div>
      <a href="{{ route('contact') }}" class="btn-banner-contact">Contact Us</a>
    </div>

    <div class="banner-right">
      <div class="testimonial-slides-wrap">
        @forelse($testimonials as $idx => $testimonial)
          <div class="t-slide {{ $idx === 0 ? 'active' : '' }}">
            <p class="t-quote">{{ $testimonial->content }}</p>
            <cite class="t-author">– {{ $testimonial->name }}{{ $testimonial->location ? ' / ' . $testimonial->location : '' }}</cite>
          </div>
        @empty
          <div class="t-slide active">
            <p class="t-quote">"Highly professional guides who showed us continuous care and attention at every moment."</p>
            <cite class="t-author">– Marie Jadis</cite>
          </div>
          <div class="t-slide">
            <p class="t-quote">"A fantastic trip, a well-thought-out organization, handled with complete discretion."</p>
            <cite class="t-author">– Philippe Lemarechal</cite>
          </div>
          <div class="t-slide">
            <p class="t-quote">"Perfectly organized, allowing us to truly get the most out of our journey!"</p>
            <cite class="t-author">– Georges &amp; Michele</cite>
          </div>
        @endforelse
      </div>
      
      <div class="t-dots">
        @if($testimonials->isNotEmpty())
          @foreach($testimonials as $idx => $testimonial)
            <button class="t-dot {{ $idx === 0 ? 'active' : '' }}" data-t="{{ $idx }}"></button>
          @endforeach
        @else
          <button class="t-dot active" data-t="0"></button>
          <button class="t-dot" data-t="1"></button>
          <button class="t-dot" data-t="2"></button>
        @endif
      </div>
    </div>

  </div>
</section>

<section class="home-contact-strip">
  <div class="home-contact-strip-inner container-inner">
    <div class="contact-strip-message">
      {{ $settings['contact_strip_text'] ?? 'Do not hesitate to call us if you would like any information or if you can\'t find the offices:' }}
    </div>
    <div class="contact-strip-phones">
      @if(!empty($settings['uddhav_phone']))
        <span class="contact-person">Uddhav: <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', $settings['uddhav_phone']) }}">{{ $settings['uddhav_phone'] }}</a></span>
      @endif
      @if(!empty($settings['uddhav_phone']) && !empty($settings['krishna_phone']))
      @endif
      @if(!empty($settings['krishna_phone']))
        <span class="contact-person">Krishna Raj: <a href="tel:{{ str_replace([' ', '-', '(', ')'], '', $settings['krishna_phone']) }}">{{ $settings['krishna_phone'] }}</a></span>
      @endif
    </div>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.slider-dot');
  let currentIdx = 0;

  function switchHeroSlide(targetIdx) {
    if(!slides.length) return;
    slides[currentIdx].classList.remove('active');
    if(dots.length) dots[currentIdx].classList.remove('active');
    currentIdx = (targetIdx + slides.length) % slides.length;
    slides[currentIdx].classList.add('active');
    if(dots.length) dots[currentIdx].classList.add('active');
  }

  dots.forEach((dot, i) => dot.addEventListener('click', () => switchHeroSlide(i)));
  setInterval(() => switchHeroSlide(currentIdx + 1), 6000);

  const tSlides = document.querySelectorAll('.t-slide');
  const tDots = document.querySelectorAll('.t-dot');
  let tCurrent = 0;

  function switchTestimonial(targetIdx) {
    if(!tSlides.length) return;
    tSlides[tCurrent].classList.remove('active');
    tDots[tCurrent].classList.remove('active');
    tCurrent = (targetIdx + tSlides.length) % tSlides.length;
    tSlides[tCurrent].classList.add('active');
    tDots[tCurrent].classList.add('active');
  }

  tDots.forEach((dot, i) => dot.addEventListener('click', () => switchTestimonial(i)));
  setInterval(() => switchTestimonial(tCurrent + 1), 5000);
});
</script>
</body>
</html>