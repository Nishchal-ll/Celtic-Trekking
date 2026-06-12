<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>{{ $destination->meta_title ?: ($destination->name . ' Trekking - Celtic Trekking') }}</title>
  <meta name="description" content="{{ $destination->meta_description }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/trekking.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
  @if($destination->banner_image)
    <div class="page-hero-image" style="background-image: url('{{ asset('storage/' . $destination->banner_image) }}');"></div>
  @else
    <div class="page-hero-image" style="background-image: url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=1600&q=80');"></div>
  @endif
  <div class="page-hero-overlay"></div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

<section class="intro-section">
  <div class="intro-inner">
    <div class="intro-text">
      <h1 class="page-heading">{{ $destination->intro_title ?: 'Our Trekking Routes in ' . $destination->name }}</h1>
      <div class="intro-paragraph-wrap">
        @if($destination->intro_content)
          {!! $destination->intro_content !!}
        @else
          <p>{{ $destination->description }}</p>
        @endif
      </div>
      <a href="{{ route('contact') }}" class="btn-devis">Request a Quote</a>
    </div>

    <div class="intro-slider-container">
      <div class="intro-slider" id="introSlider">
        @php($gallery = collect($destination->intro_gallery ?: [])->filter())
        @if($gallery->isNotEmpty())
          @foreach($gallery as $idx => $image)
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $destination->name }} image {{ $idx + 1 }}" class="{{ $idx === 0 ? 'active' : '' }}">
          @endforeach
        @elseif($destination->image)
          <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" class="active">
        @else
          <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80" alt="{{ $destination->name }}" class="active">
        @endif
        <button class="slider-arrow prev" id="sliderPrev" aria-label="Previous"><i class="fa fa-chevron-left"></i></button>
        <button class="slider-arrow next" id="sliderNext" aria-label="Next"><i class="fa fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

<section class="detail-section">
  <div class="detail-inner">
    <h2 class="section-heading">Discover the itineraries offered by Celtic Trekking agency</h2>

    @if($destination->treks->isNotEmpty())
      <div class="tab-container">
        <div class="tab-bar">
          @foreach($destination->treks as $idx => $trek)
            <button class="tab-btn {{ $idx === 0 ? 'active' : '' }}" data-trek="{{ $trek->slug }}">
              <i class="fa fa-compass"></i> {{ $trek->name }}
            </button>
          @endforeach
        </div>
      </div>

      @foreach($destination->treks as $idx => $trek)
        <div class="tab-panel {{ $idx === 0 ? 'active' : '' }}" id="trek-{{ $trek->slug }}">
          <div class="trek-detail-grid">
            
            <div class="trek-detail-left">
              <div class="trek-img-wrapper">
                @if($trek->image)
                  <img src="{{ asset('storage/' . $trek->image) }}" alt="{{ $trek->name }}">
                @else
                  <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=800&q=80" alt="{{ $trek->name }}">
                @endif
              </div>
              
              <div class="trek-detail-meta">
                <p class="duration-text"><strong>Duration:</strong> {{ $trek->duration_days }} nights / {{ $trek->duration_days + 1 }} days</p>
                
                <div class="precisions-block">
                  <strong>Details:</strong>
                  <p class="desc-text">{{ $trek->short_description ?: $trek->description }}</p>
                </div>
              </div>
              
              <div class="detail-btns">
                <a href="{{ route('contact') }}" class="btn-action btn-info">Request Additional Information</a>
                <a href="{{ route('testimony') }}" class="btn-action btn-temoignage">Our Clients Testify</a>
                <a href="{{ route('fixed-departures') }}" class="btn-action btn-departs">Our Fixed Departures</a>
              </div>
            </div>
            
            <div class="trek-detail-right">
              <div class="itinerary-timeline">
                @forelse($trek->itinerary as $day)
                  <div class="day-item">
                    <strong>DAY {{ str_pad($day->day, 2, '0', STR_PAD_LEFT) }}:</strong> 
                    <span>{{ $day->title }} {{ $day->description ? '– ' . $day->description : '' }}</span>
                  </div>
                @empty
                  <div class="day-item">The detailed itinerary will be available soon. Contact us to receive it.</div>
                @endforelse
              </div>
            </div>

          </div>
        </div>
      @endforeach
    @else
      <div class="footnote-box">
        <p class="footnote">Tours for this destination will be published shortly.</p>
      </div>
    @endif
  </div>
</section>

<section class="testimonials-section">
  <div class="testimonials-inner">
    <div class="testimonial-left">
      <div class="testimonial-icons">
        <i class="fa fa-quote-left"></i>
        <span></span>
        <i class="fa fa-comments-o"></i>
      </div>
      <a href="{{ route('contact') }}" class="btn-contact">Contact Us</a>
    </div>
    <div class="testimonial-right">
      <div class="testimonial-slides-wrap">
        @forelse($testimonials as $idx => $testimonial)
          <div class="t-slide {{ $idx === 0 ? 'active' : '' }}">
            <p class="t-quote">{{ $testimonial->content }}</p>
            <cite class="t-author">– {{ $testimonial->name }}{{ $testimonial->location ? ' / ' . $testimonial->location : '' }}</cite>
          </div>
        @empty
          <div class="t-slide active">
            <p class="t-quote">"Perfectly organized, allowing us to truly get the most out of our journey!"</p>
            <cite class="t-author">Georges &amp; Michele</cite>
          </div>
          <div class="t-slide">
            <p class="t-quote">"Highly professional guides who showed us continuous care and attention at every moment."</p>
            <cite class="t-author">Marie Jadis</cite>
          </div>
          <div class="t-slide">
            <p class="t-quote">"A fantastic trip and well-thought-out arrangements handled with total discretion."</p>
            <cite class="t-author">Philippe Lemarechal</cite>
          </div>
        @endforelse
      </div>
      <div class="t-dots">
        @if($testimonials->isNotEmpty())
          @foreach($testimonials as $idx => $testimonial)
            <button class="t-dot {{ $idx === 0 ? 'active' : '' }}" data-t="{{ $idx }}" aria-label="Slide {{ $idx + 1 }}"></button>
          @endforeach
        @else
          <button class="t-dot active" data-t="0" aria-label="Slide 1"></button>
          <button class="t-dot" data-t="1" aria-label="Slide 2"></button>
          <button class="t-dot" data-t="2" aria-label="Slide 3"></button>
        @endif
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Gallery Slider Component Logic
  const slides = document.querySelectorAll('#introSlider img');
  let current = 0;
  let sliderInterval;

  function showSlide(idx) {
    if (!slides.length) return;
    slides[current].classList.remove('active');
    current = (idx + slides.length) % slides.length;
    slides[current].classList.add('active');
  }

  function startAutoplay() {
    if (slides.length < 2) return;
    sliderInterval = setInterval(() => showSlide(current + 1), 6000);
  }

  document.getElementById('sliderPrev')?.addEventListener('click', () => {
    clearInterval(sliderInterval);
    showSlide(current - 1);
    startAutoplay();
  });

  document.getElementById('sliderNext')?.addEventListener('click', () => {
    clearInterval(sliderInterval);
    showSlide(current + 1);
    startAutoplay();
  });

  startAutoplay();

  // Unified System Tab Toggling (Targeting dataset.trek)
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      tabPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const targetPanel = document.getElementById('trek-' + btn.dataset.trek);
      if (targetPanel) targetPanel.classList.add('active');
    });
  });

  // Testimonial Carousel Integration
  const tSlides = document.querySelectorAll('.t-slide');
  const tDots   = document.querySelectorAll('.t-dot');
  let tCurrent  = 0;
  let tInterval;

  function tGoTo(idx) {
    tSlides[tCurrent].classList.remove('active');
    tDots[tCurrent].classList.remove('active');
    tCurrent = idx;
    tSlides[tCurrent].classList.add('active');
    tDots[tCurrent].classList.add('active');
  }

  function startTestimonialAutoplay() {
    tInterval = setInterval(() => {
      tGoTo((tCurrent + 1) % tSlides.length);
    }, 5000);
  }

  tDots.forEach(d => d.addEventListener('click', () => {
    clearInterval(tInterval);
    tGoTo(+d.dataset.t);
    startTestimonialAutoplay();
  }));

  startTestimonialAutoplay();
});
</script>
</body>
</html>