<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <title>Testimonials – Celtic Trekking</title>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/testimony.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <a href="{{ route('agency') }}" class="page-hero-btn">About Celtic Trekking</a>
</section>

<div class="page-title-bar">
  <div class="title-bar-inner">
    <h1>Our Clients Testify</h1>
    <div class="title-accent-line"></div>
  </div>
</div>

<section class="temoignages-section">
  <div class="temoignages-viewport">

    <button class="carousel-arrow carousel-prev" id="carouselPrev" aria-label="Previous testimonials">
      <i class="fa fa-chevron-left"></i>
    </button>

    <div class="temoignages-track-wrapper">
      <div class="temoignages-track" id="carouselTrack">
        @forelse($testimonials as $testimonial)
          <div class="temoignage-card">
            <div class="card-quote-mark"><i class="fa fa-quote-right"></i></div>
            <div class="card-header">
              <div class="card-avatar">
                @if($testimonial->avatar)
                  <img src="{{ asset('storage/' . $testimonial->avatar) }}" alt="{{ $testimonial->name }}" />
                @else
                  <i class="fa fa-user"></i>
                @endif
              </div>
              <div class="card-meta">
                <span class="card-name">{{ $testimonial->name }}</span>
                @if($testimonial->trek)
                  <span class="card-trek"><i class="fa fa-map-marker"></i> {{ $testimonial->trek->name }}</span>
                @endif
              </div>
            </div>
            <p class="card-text">“{{ $testimonial->content }}”</p>
          </div>
        @empty
          <div class="temoignage-card empty-card">
            <div class="card-header">
              <div class="card-avatar"><i class="fa fa-user"></i></div>
              <div class="card-meta">
                <span class="card-name">Celtic Trekking</span>
                <span class="card-trek">Testimonials</span>
              </div>
            </div>
            <p class="card-text">No testimonials are available yet. Please check back soon.</p>
          </div>
        @endforelse
      </div>
    </div>

    <button class="carousel-arrow carousel-next" id="carouselNext" aria-label="Next testimonials">
      <i class="fa fa-chevron-right"></i>
    </button>

  </div>

  <div class="carousel-dots" id="carouselDots"></div>
</section>

<div class="share-banner">
  <p>Share your adventure with friends</p>
</div>

<div class="social-strip">
  <div class="social-strip-inner">
    <i class="fa fa-heart"></i>
    <span class="divider"></span>
    <i class="fa fa-heart"></i>
    <span class="divider"></span>
    <i class="fa fa-heart"></i>
  </div>
</div>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {

  const track = document.getElementById('carouselTrack');
  const cards = Array.from(track.querySelectorAll('.temoignage-card'));
  const dotsContainer = document.getElementById('carouselDots');
  const prevBtn = document.getElementById('carouselPrev');
  const nextBtn = document.getElementById('carouselNext');

  let cardsPerPage = 3;
  let currentPage = 0;
  let autoplayInterval;

  if (!cards.length || cards[0].classList.contains('empty-card')) {
    dotsContainer.innerHTML = '<p class="no-testimonials">No testimonials available yet.</p>';
    prevBtn.disabled = true;
    nextBtn.disabled = true;
    return;
  }

  function getCardsPerPage() {
    if (window.innerWidth <= 640) return 1;
    if (window.innerWidth <= 960) return 2;
    return 3;
  }

  function totalPages() {
    return Math.ceil(cards.length / cardsPerPage);
  }

  function buildDots() {
    dotsContainer.innerHTML = '';
    const pagesCount = totalPages();
    
    if (pagesCount <= 1) {
      dotsContainer.style.display = 'none';
      return;
    } else {
      dotsContainer.style.display = 'flex';
    }

    for (let i = 0; i < pagesCount; i++) {
      const dot = document.createElement('button');
      dot.className = 'carousel-dot' + (i === currentPage ? ' active' : '');
      dot.setAttribute('aria-label', `Go to page ${i + 1}`);
      dot.addEventListener('click', () => {
        resetAutoplay();
        goTo(i);
      });
      dotsContainer.appendChild(dot);
    }
  }

  function goTo(page) {
    const pages = totalPages();
    if (pages <= 1) {
      track.style.transform = 'translateX(0)';
      return;
    }
    
    currentPage = (page + pages) % pages;

    const cardWidth = cards[0].getBoundingClientRect().width;
    const gap = 24; 
    const offset = currentPage * cardsPerPage * (cardWidth + gap);
    
    track.style.transform = `translateX(-${offset}px)`;

    const dots = dotsContainer.querySelectorAll('.carousel-dot');
    dots.forEach((d, i) => d.classList.toggle('active', i === currentPage));
  }

  function init() {
    cardsPerPage = getCardsPerPage();
    
    // Ensure styles adapt cleanly before calculation
    cards.forEach(card => {
      if (cardsPerPage === 1) card.style.flex = '0 0 100%';
      else if (cardsPerPage === 2) card.style.flex = '0 0 calc((100% - 24px) / 2)';
      else card.style.flex = '0 0 calc((100% - 48px) / 3)';
    });

    currentPage = 0;
    track.style.transform = 'translateX(0)';
    buildDots();
  }

  function resetAutoplay() {
    clearInterval(autoplayInterval);
    autoplayInterval = setInterval(() => goTo(currentPage + 1), 6000);
  }

  prevBtn.addEventListener('click', () => {
    resetAutoplay();
    goTo(currentPage - 1);
  });
  
  nextBtn.addEventListener('click', () => {
    resetAutoplay();
    goTo(currentPage + 1);
  });

  // Debounced execution resize layout listener
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(init, 150);
  });

  init();
  resetAutoplay();
});
</script>
</body>
</html>