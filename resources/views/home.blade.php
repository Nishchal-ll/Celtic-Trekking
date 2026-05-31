<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Nepal Trekking: Plan treks and hikes with Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>

@include('partials.navbar')

<!-- HERO SLIDER -->
<section class="hero-slider" id="hero-slider">
  <div class="slider-wrapper">

    <div class="slide active" data-slide="0">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1519682577862-22b62b24e493?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Roumanie</h2>
          <p class="slide-subtitle">Une destination aux paysages variés et somptueux injustement méconnue</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="1">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Népal</h2>
          <p class="slide-subtitle">Immersion au cœur des vallées sacrées de l'Himalaya</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="2">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1493558103817-58b2924bce98?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Maroc</h2>
          <p class="slide-subtitle">Dunes et kasbahs, une aventure authentique au cœur du désert</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="3">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Tibet</h2>
          <p class="slide-subtitle">Des paysages himalayens inoubliables au toit du monde</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="4">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1501854140801-50d01698950b?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Himalaya</h2>
          <p class="slide-subtitle">Partez à la conquête des sommets légendaires</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="5">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Aventure</h2>
          <p class="slide-subtitle">Explorez les sentiers les plus beaux du monde avec nos guides</p>
          <a href="#" class="btn-slide">Learn More</a>
        </div>
      </div>
    </div>

  </div>

  <div class="slider-dots">
    <button class="slider-dot active" data-slide="0"></button>
    <button class="slider-dot" data-slide="1"></button>
    <button class="slider-dot" data-slide="2"></button>
    <button class="slider-dot" data-slide="3"></button>
    <button class="slider-dot" data-slide="4"></button>
    <button class="slider-dot" data-slide="5"></button>
  </div>

  <button class="slider-arrow slider-prev"><i class="fa fa-chevron-left"></i></button>
  <button class="slider-arrow slider-next"><i class="fa fa-chevron-right"></i></button>
</section>

<!-- TAGLINE -->
<section class="hero-tagline">
  <div class="container">
    <h2 class="tagline-text">Travel, walk, discover with Celtic Trekking</h2>
  </div>
</section>

<!-- DESTINATIONS -->
<section class="destinations-section">
  <div class="container">
    <div class="destinations-grid">

      <a href="#" class="destination-card">
        <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=80');"></div>
        <div class="destination-meta">
          <span class="destination-country">Tibet</span>
        </div>
      </a>

      <a href="#" class="destination-card">
        <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80');"></div>
        <div class="destination-meta">
          <span class="destination-country">Népal</span>
        </div>
      </a>

      <a href="#" class="destination-card">
        <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1493558103817-58b2924bce98?auto=format&fit=crop&w=800&q=80');"></div>
        <div class="destination-meta">
          <span class="destination-country">Maroc</span>
        </div>
      </a>

      <a href="#" class="destination-card">
        <div class="destination-image" style="background-image: url('https://images.unsplash.com/photo-1519682577862-22b62b24e493?auto=format&fit=crop&w=800&q=80');"></div>
        <div class="destination-meta">
          <span class="destination-country">Roumanie</span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
  <div class="testimonials-inner">

    <div class="testimonial-left">
      <div class="testimonial-icons">
        <i class="fa fa-heart"></i>
        <span></span>
        <i class="fa fa-heart"></i>
      </div>
      <a href="#" class="btn-contact">Contact Us</a>
    </div>

    <div class="testimonial-right">
      <div class="testimonial-slides-wrap">

        <div class="testimonial-slide active">
          <blockquote class="t-quote">"Des guides d'un grand professionnalisme et d'une attention de tous les instants."</blockquote>
          <cite class="t-author">– Marie Jadis</cite>
        </div>

        <div class="testimonial-slide">
          <blockquote class="t-quote">"Un séjour fantastique, une organisation bien pensée, en toute discrétion."</blockquote>
          <cite class="t-author">– Philippe Lemarechal</cite>
        </div>

        <div class="testimonial-slide">
          <blockquote class="t-quote">"Parfaitement organisé, nous avons ainsi profité au maximum de notre voyage!"</blockquote>
          <cite class="t-author">– Georges &amp; Michele</cite>
        </div>

        <div class="testimonial-slide">
          <blockquote class="t-quote">"An unforgettable experience, I highly recommend Celtic Trekking to all nature lovers."</blockquote>
          <cite class="t-author">– Sophie &amp; Laurent</cite>
        </div>

      </div>

      <div class="testimonial-dots">
        <button class="testimonial-dot active" data-t="0"></button>
        <button class="testimonial-dot" data-t="1"></button>
        <button class="testimonial-dot" data-t="2"></button>
        <button class="testimonial-dot" data-t="3"></button>
      </div>
    </div>

  </div>
</section>

<!-- CONTACT INFO -->
<section class="contact-info-section">
  <div class="container">
    <div class="contact-info-wrapper">
      <p class="contact-text">
        Please call us if you need information<br>
        ou si vous ne trouvez pas les bureaux :
      </p>
      <div class="contact-phones">
        <span>Uddhav : <a href="tel:+9779841786778">9841 78 67 78</a></span>
        <span class="sep">–</span>
        <span>Krishna Raj : <a href="tel:+9779841413167">9841 41 31 67</a></span>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {

  // Hero Slider
  const slides = document.querySelectorAll('.slide');
  const dots = document.querySelectorAll('.slider-dot');
  let current = 0;
  let timer;

  function goTo(idx) {
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');
    current = idx;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
  }

  function next() { goTo((current + 1) % slides.length); }
  function prev() { goTo((current - 1 + slides.length) % slides.length); }

  dots.forEach(d => d.addEventListener('click', () => { clearInterval(timer); goTo(+d.dataset.slide); timer = setInterval(next, 5000); }));
  document.querySelector('.slider-next').addEventListener('click', () => { clearInterval(timer); next(); timer = setInterval(next, 5000); });
  document.querySelector('.slider-prev').addEventListener('click', () => { clearInterval(timer); prev(); timer = setInterval(next, 5000); });

  const sliderEl = document.getElementById('hero-slider');
  sliderEl.addEventListener('mouseenter', () => clearInterval(timer));
  sliderEl.addEventListener('mouseleave', () => { timer = setInterval(next, 5000); });

  timer = setInterval(next, 5000);

  // Testimonial Slider
  const tSlides = document.querySelectorAll('.testimonial-slide');
  const tDots = document.querySelectorAll('.testimonial-dot');
  let tCurrent = 0;

  function tGoTo(idx) {
    tSlides[tCurrent].classList.remove('active');
    tDots[tCurrent].classList.remove('active');
    tCurrent = idx;
    tSlides[tCurrent].classList.add('active');
    tDots[tCurrent].classList.add('active');
  }

  tDots.forEach(d => d.addEventListener('click', () => tGoTo(+d.dataset.t)));
  setInterval(() => tGoTo((tCurrent + 1) % tSlides.length), 4000);

});
</script>
</body>
</html>