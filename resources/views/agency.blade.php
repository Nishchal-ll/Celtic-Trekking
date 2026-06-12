<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Celtic Agency – Celtic Trekking</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/agency.css') }}">
</head>
<body>


@include('partials.navbar')

<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
</section>

<div class="page-body">
  <div class="page-layout">

    <div class="col-left">

      <h1 class="section-title">{{ $agencyPage->title ?? 'The Celtic Trekking Agency' }}</h1>

      <div class="agency-text">
        @if($agencyPage?->intro_content)
          {!! $agencyPage->intro_content !!}
        @else
          <p><strong>Our great adventure began in 1992</strong> when Olivier Kerviel married Sarita and settled in Nepal. This is where Celtic Trekking was born.</p>
          <p>After 20 years serving <strong>Celtic Trekking</strong>, Olivier Kerviel handed over the company to Uddhav Pokharel and Krishna Raj Giri, two French-speaking Nepalese partners.</p>
        @endif
      </div>

      <div class="info-box">
        <h3>Celtic Trekking Adventure (P.) Ltd.</h3>
        <p>{{ $settings['address'] ?? 'GPO Box: 11661, 7 Corner Street, Thamel' }}</p>
        <p>Kathmandu, Nepal.</p>

        <p class="call-label">Please call us if you need information<br>or if you cannot find our offices:</p>
        <p>{{ $settings['phone'] ?? 'Uddhav : 9841 78 67 78 – Krishna Raj : 9841 41 31 67' }}</p>
        <p>Phone : {{ $settings['phone'] ?? '+977-1-4701205' }}</p>
        <p>Email : <a href="mailto:{{ $settings['email'] ?? 'contact@celtictrekking.com' }}">{{ $settings['email'] ?? 'contact@celtictrekking.com' }}</a></p>

        <hr class="divider">

        <a href="{{ route('terms') }}" class="btn-conditions">View Terms & Conditions</a>

        <hr class="divider">

        <div class="trek-links">
          <a href="#" class="btn-trek">Our Tibet Treks</a>
          <a href="#" class="btn-trek">Our Nepal Treks</a>
          <a href="#" class="btn-trek">Our Morocco Treks</a>
          <a href="#" class="btn-trek">Our Romania Treks</a>
        </div>

        <div class="social-icons">
          @if(!empty($settings['facebook_url']))
            <a href="{{ $settings['facebook_url'] }}" target="_blank" rel="noopener"><i class="fa fa-facebook"></i></a>
          @endif
          @if(!empty($settings['instagram_url']))
            <a href="{{ $settings['instagram_url'] }}" target="_blank" rel="noopener"><i class="fa fa-instagram"></i></a>
          @endif
          @if(!empty($settings['twitter_url']))
            <a href="{{ $settings['twitter_url'] }}" target="_blank" rel="noopener"><i class="fa fa-twitter"></i></a>
          @endif
          @if(!empty($settings['youtube_url']))
            <a href="{{ $settings['youtube_url'] }}" target="_blank" rel="noopener"><i class="fa fa-youtube-play"></i></a>
          @endif
        </div>

      </div> </div> <div class="col-right">

      <div class="agency-slider">
        <div class="agency-slider-track" id="agencyTrack">
          @php($agencyImages = collect($agencyPage->slider_images ?? [])->filter())
          @if($agencyImages->isNotEmpty())
            @foreach($agencyImages as $image)
              <div class="agency-slide" style="background-image: url('{{ asset('storage/' . $image) }}');"></div>
            @endforeach
          @else
            <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=900&q=80');"></div>
            <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1469521669194-babb45599def?auto=format&fit=crop&w=900&q=80');"></div>
            <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=900&q=80');"></div>
          @endif
        </div>
        <button class="agency-slider-arrow agency-slider-prev" id="agencyPrev">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="agency-slider-arrow agency-slider-next" id="agencyNext">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>

      <a href="/contact" class="btn-contact-agency">Contact the Celtic Trekking Agency</a>

      <section class="agency-testimonials">
        <h2 class="section-title">What our clients say</h2>
        <div class="agency-testimonials-grid">
          @forelse($testimonials as $testimonial)
            <div class="testimonial-card">
              <div class="testimonial-header">
                <div class="testimonial-avatar">
                  @if($testimonial->avatar)
                    <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" />
                  @else
                    <i class="fa fa-user"></i>
                  @endif
                </div>
                <div class="testimonial-meta">
                  <strong>{{ $testimonial->name }}</strong>
                  @if($testimonial->location)
                    <div class="testimonial-location">{{ $testimonial->location }}</div>
                  @endif
                </div>
              </div>
              <p class="testimonial-text">“{{ $testimonial->content }}”</p>
            </div>
          @empty
            <div class="testimonial-card empty-state">
              <p class="testimonial-text">No testimonials available yet.</p>
            </div>
          @endforelse
        </div>
      </section>

      <h2 class="ethics-title">Our expertise and ethics</h2>

      <div class="ethics-text">
        @if($agencyPage?->ethics_content)
          {!! $agencyPage->ethics_content !!}
        @else
          <p>For all the destinations and treks we offer, we rely on competent and professional local teams whom we compensate fairly and generously.</p>
          <p>Travel intelligently by putting your trust in those who will help you discover the world through respect and mutual exchange.</p>
        @endif
      </div>

    </div> </div> </div> @include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
  const track = document.getElementById('agencyTrack');
  const slides = track.querySelectorAll('.agency-slide');
  let idx = 0;

  function goTo(i) {
    idx = (i + slides.length) % slides.length;
    track.style.transform = `translateX(-${idx * 100}%)`;
  }

  document.getElementById('agencyPrev').addEventListener('click', () => goTo(idx - 1));
  document.getElementById('agencyNext').addEventListener('click', () => goTo(idx + 1));

  setInterval(() => goTo(idx + 1), 5000);
});
</script>
</body>
</html>
