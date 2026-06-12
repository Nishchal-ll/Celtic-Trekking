<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>{{ $destination->meta_title ?: ($destination->name . ' Trekking - Celtic Trekking') }}</title>
  <meta name="description" content="{{ $destination->meta_description }}">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/' . ($destination->slug === 'maroc' ? 'morocco' : $destination->slug) . '.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
  @if($destination->banner_image)
    <div class="page-hero-image" style="background-image: url('{{ asset('storage/' . $destination->banner_image) }}');"></div>
  @else
    <div class="page-hero-image"></div>
  @endif
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <h1 class="page-hero-title">{{ $destination->hero_title ?: $destination->name . ' Trekking' }}</h1>
    <div class="title-accent-line yellow"></div>
    @if($destination->hero_subtitle || $destination->short_description)
      <p class="page-hero-subtitle">{{ $destination->hero_subtitle ?: $destination->short_description }}</p>
    @endif
  </div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

<section class="intro-section">
  <div class="intro-inner">
    <div class="intro-text">
      <h2>{{ $destination->intro_title ?: 'Our ' . $destination->name . ' Trek Routes' }}</h2>
      <div class="section-title-line"></div>
      @if($destination->intro_content)
        {!! $destination->intro_content !!}
      @else
        <p>{{ $destination->description }}</p>
      @endif
      <a href="{{ route('contact') }}" class="btn-devis">Request a quote</a>
    </div>

    <div class="intro-slider-container">
      <div class="intro-slider" id="introSlider">
        @php($gallery = collect($destination->intro_gallery ?: [])->filter())
        @if($gallery->isNotEmpty())
          @foreach($gallery as $idx => $image)
            <img src="{{ asset('storage/' . $image) }}" alt="{{ $destination->name }} trekking image {{ $idx + 1 }}" class="{{ $idx === 0 ? 'active' : '' }}">
          @endforeach
        @elseif($destination->image)
          <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" class="active">
        @else
          <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80" alt="{{ $destination->name }}" class="active">
        @endif
        <button class="slider-arrow prev" id="sliderPrev" aria-label="Previous image"><i class="fa fa-chevron-left"></i></button>
        <button class="slider-arrow next" id="sliderNext" aria-label="Next image"><i class="fa fa-chevron-right"></i></button>
      </div>
    </div>
  </div>
</section>

@if($destination->info_content || $destination->info_title)
  <section class="info-strip">
    <div class="info-strip-inner">
      <div class="info-strip-card">
        @if($destination->info_title)
          <h3>{{ $destination->info_title }}</h3>
        @endif
        {!! $destination->info_content !!}
      </div>
    </div>
  </section>
@endif

<section class="detail-section">
  <div class="detail-inner">
    <h2 class="section-heading">Discover the circuits offered by Celtic Trekking agency</h2>
    <div class="section-title-line center"></div>

    @if($destination->treks->isNotEmpty())
      <div class="trek-tabs-scroll-wrapper">
        <div class="trek-tabs" id="trekTabs">
          @foreach($destination->treks as $idx => $trek)
            <button class="trek-tab-btn {{ $idx === 0 ? 'active' : '' }}" data-trek="{{ $trek->slug }}">
              <i class="fa fa-compass"></i> {{ $trek->name }}
            </button>
          @endforeach
        </div>
      </div>

      @foreach($destination->treks as $idx => $trek)
        <div class="trek-tab-panel {{ $idx === 0 ? 'active' : '' }}" id="trek-{{ $trek->slug }}">
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
                <div class="meta-row"><strong>Duration:</strong> <span>{{ $trek->duration_days }} days</span></div>
                @if($trek->max_altitude)
                  <div class="meta-row"><strong>Max altitude:</strong> <span>{{ number_format($trek->max_altitude) }} m</span></div>
                @endif
                @if($trek->best_season)
                  <div class="meta-row"><strong>Best season:</strong> <span>{{ $trek->best_season }}</span></div>
                @endif
                <div class="meta-row"><strong>Difficulty:</strong> <span class="badge badge-medium">{{ $trek->difficulty_label }}</span></div>
                <p class="desc-text">{{ $trek->short_description ?: $trek->description }}</p>
              </div>
              <div class="detail-btns">
                <a href="{{ route('contact') }}" class="btn-info"><i class="fa fa-info-circle"></i> Request More Information</a>
                <a href="{{ route('testimony') }}" class="btn-temoignage"><i class="fa fa-comments"></i> Our Clients Testify</a>
                <a href="{{ route('fixed-departures') }}" class="btn-departs"><i class="fa fa-calendar"></i> Fixed Departures</a>
              </div>
            </div>
            <div class="trek-detail-right">
              <div class="itinerary-timeline">
                @forelse($trek->itinerary as $day)
                  <div class="day-item">
                    <span class="day-tag">Day {{ str_pad($day->day, 2, '0', STR_PAD_LEFT) }}</span>
                    <strong>{{ $day->title }}:</strong> {{ $day->description }}
                  </div>
                @empty
                  <div class="day-item">Detailed itinerary will be added soon. Contact us for the full PDF.</div>
                @endforelse
              </div>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <p class="section-sub">Trekking routes for {{ $destination->name }} will be published soon.</p>
    @endif
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
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
    sliderInterval = setInterval(() => showSlide(current + 1), 5000);
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

  const trekBtns = document.querySelectorAll('.trek-tab-btn');
  const trekPanels = document.querySelectorAll('.trek-tab-panel');

  trekBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      trekBtns.forEach(b => b.classList.remove('active'));
      trekPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('trek-' + btn.dataset.trek)?.classList.add('active');
      btn.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    });
  });
});
</script>
</body>
</html>
