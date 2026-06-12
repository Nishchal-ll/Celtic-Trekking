<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Fixed Departures – Celtic Trekking</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fixed-departures.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

<section class="page-content">
  <div class="content-inner">

    <h1 class="page-heading">Check our fixed departures</h1>
    <p class="page-subtext">Select a destination country below to view upcoming scheduled tours.</p>

    @if($fixedDepartureDestinations->isNotEmpty())
      <div class="tab-container">
        <div class="tab-bar">
          @foreach($fixedDepartureDestinations as $idx => $destination)
            <button class="tab-btn {{ $idx === 0 ? 'active' : '' }}" data-tab="{{ $destination->slug }}">
              <i class="fa fa-map-o"></i> {{ $destination->name }}
            </button>
          @endforeach
        </div>
      </div>

      @foreach($fixedDepartureDestinations as $idx => $destination)
        <div class="tab-panel {{ $idx === 0 ? 'active' : '' }}" id="tab-{{ $destination->slug }}">
          <div class="table-responsive">
            <table class="departures-table">
              <thead>
                <tr>
                  <th>Available Tours</th>
                  <th>Departure Dates</th>
                  <th>Booking Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($destination->fixedDepartureTreks as $trek)
                  @foreach($trek->departures as $dateIdx => $departure)
                    <tr class="{{ $dateIdx === 0 ? 'row-circuit' : 'row-date' }}">
                      <td>
                        @if($dateIdx === 0)
                          {{ $trek->name }} ({{ $trek->duration_days }} days)
                          @if($trek->fixed_departure_badge)
                            <span class="tag-accent">{{ $trek->fixed_departure_badge }}</span>
                          @endif
                        @endif
                      </td>
                      <td>{{ $departure->departure_date->format('F d, Y') }}</td>
                      <td>
                        <span class="status-badge status-{{ $departure->status }}">
                          {{ ucfirst($departure->status) }}
                        </span>
                      </td>
                    </tr>
                  @endforeach
                  <tr class="row-spacer"><td colspan="3"></td></tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      @endforeach
    @else
      <div class="footnote-box">
        <p class="footnote">Fixed departures will be published here soon.</p>
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
      <a href="contact.html" class="btn-contact">Contact Us</a>
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
          <div class="t-slide">
            <p class="t-quote">"An unforgettable experience, I highly recommend Celtic Trekking to everyone."</p>
            <cite class="t-author">Sophie &amp; Laurent</cite>
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
          <button class="t-dot" data-t="3" aria-label="Slide 4"></button>
        @endif
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {

  // ===== Country Tabs Toggle =====
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabPanels = document.querySelectorAll('.tab-panel');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      tabBtns.forEach(b => b.classList.remove('active'));
      tabPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById('tab-' + btn.dataset.tab).classList.add('active');
    });
  });

  // ===== Testimonial Slick Carousel Simulation =====
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

  function startAutoplay() {
    tInterval = setInterval(() => {
      tGoTo((tCurrent + 1) % tSlides.length);
    }, 5000);
  }

  tDots.forEach(d => d.addEventListener('click', () => {
    clearInterval(tInterval);
    tGoTo(+d.dataset.t);
    startAutoplay();
  }));

  startAutoplay();
});
</script>
</body>
</html>
