<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trek au Népal : Organisez treks et randonnées avec Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'Lato', sans-serif;
    background: #fff;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  /* ===== NAVBAR ===== */
  nav {
    background-color: #1a2a4a;
    padding: 0;
    height: 64px;
    position: relative;
    z-index: 100;
  }

  .nav-inner {
    max-width: 1200px;
    width: 100%;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 100%;
  }

  .nav-logo {
    display: flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
  }

  .nav-logo-icon {
    width: 42px;
    height: 42px;
  }

  .nav-logo-text {
    display: flex;
    flex-direction: column;
    line-height: 1.1;
  }

  .nav-logo-text .brand {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.25rem;
    font-weight: 700;
    color: #fff;
    letter-spacing: 2px;
    text-transform: uppercase;
  }

  .nav-logo-text .sub {
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    color: rgba(255,255,255,0.65);
    letter-spacing: 3px;
    font-style: italic;
  }

  .nav-links {
    display: flex;
    gap: 32px;
    list-style: none;
  }

  .nav-links a {
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-decoration: none;
    color: rgba(255,255,255,0.75);
    transition: color 0.2s;
  }

  .nav-links a:hover,
  .nav-links a.active {
    color: #fff;
  }

  /* ===== HERO SLIDER ===== */
  .hero-slider {
    position: relative;
    width: 100%;
    height: 58vh;
    min-height: 400px;
    overflow: hidden;
  }

  .slider-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .slide {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    opacity: 0;
    transition: opacity 0.8s ease-in-out;
  }

  .slide.active { opacity: 1; z-index: 1; }

  .slide-image {
    width: 100%; height: 100%;
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .slide-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.3) 50%, rgba(0,0,0,0.5) 100%);
  }

  .slide-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
    z-index: 2;
    width: 80%;
    max-width: 900px;
  }

  .slide-title {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 3.8rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 12px;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
  }

  .slide-subtitle {
    font-family: 'Lato', sans-serif;
    font-size: 1.15rem;
    font-weight: 400;
    margin-bottom: 28px;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  }

  .btn-slide {
    display: inline-block;
    padding: 13px 36px;
    background-color: #3a6fd8;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    border-radius: 2px;
    transition: background-color 0.3s ease;
  }

  .btn-slide:hover { background-color: #2b5cb3; }

  /* Dots */
  .slider-dots {
    position: absolute;
    bottom: 18px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 3;
    display: flex;
    gap: 8px;
  }

  .slider-dot {
    width: 11px; height: 11px;
    border-radius: 50%;
    background-color: rgba(255,255,255,0.4);
    border: 2px solid rgba(255,255,255,0.7);
    cursor: pointer;
    transition: all 0.3s ease;
    padding: 0;
  }

  .slider-dot.active { background-color: #fff; border-color: #fff; }

  /* Arrows */
  .slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 3;
    background-color: rgba(0,0,0,0.35);
    color: #fff;
    border: none;
    width: 46px; height: 46px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .slider-arrow:hover { background-color: rgba(0,0,0,0.65); }
  .slider-prev { left: 0; }
  .slider-next { right: 0; }

  /* ===== TAGLINE ===== */
  .hero-tagline {
    background-color: #1a2240;
    padding: 24px 0;
    text-align: center;
  }

  .tagline-text {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.5rem;
    color: #9aa4b8;
    font-weight: 400;
    letter-spacing: 2px;
    margin: 0;
  }

  /* ===== DESTINATIONS GRID ===== */
  .destinations-section {
    padding: 30px 0 20px;
    background-color: #fff;
  }

  .destinations-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0 20px;
  }

  .destination-card {
    display: block;
    text-decoration: none;
    color: inherit;
  }

  .destination-image {
    width: 100%;
    height: 155px;
    background-size: cover;
    background-position: center;
  }

  .destination-meta {
    padding: 14px 10px 18px;
    text-align: center;
  }

  .destination-country {
    display: block;
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.05rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #1b2a4a;
    position: relative;
  }

  .destination-country::before,
  .destination-country::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 35%;
    height: 1px;
    background-color: #c8cdd6;
  }

  .destination-country::before { left: 0; }
  .destination-country::after { right: 0; }

  /* ===== TESTIMONIALS ===== */
  .testimonials-section {
    background-color: #1d3d8c;
    padding: 50px 0;
  }

  .testimonials-inner {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 40px;
  }

  .testimonial-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    min-width: 180px;
  }

  .testimonial-icons {
    display: flex;
    align-items: center;
    gap: 14px;
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
  }

  .testimonial-icons span {
    display: inline-block;
    width: 1px;
    height: 32px;
    background-color: rgba(255,255,255,0.3);
  }

  .btn-contact {
    display: inline-block;
    padding: 12px 28px;
    background-color: #3a6fd8;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .btn-contact:hover { background-color: #2b5cb3; }

  .testimonial-right {
    flex: 1;
    text-align: center;
  }

  .testimonial-slides-wrap {
    position: relative;
    min-height: 100px;
  }

  .testimonial-slide {
    display: none;
  }

  .testimonial-slide.active { display: block; }

  .t-quote {
    font-family: 'Lato', sans-serif;
    font-size: 1.3rem;
    line-height: 1.65;
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 14px;
    font-style: normal;
  }

  .t-author {
    display: block;
    color: rgba(255,255,255,0.8);
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 18px;
  }

  .testimonial-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 6px;
  }

  .testimonial-dot {
    width: 11px; height: 11px;
    border-radius: 50%;
    background-color: transparent;
    border: 2px solid rgba(255,255,255,0.6);
    cursor: pointer;
    padding: 0;
    transition: all 0.3s;
  }

  .testimonial-dot.active {
    background-color: #fff;
    border-color: #fff;
  }

  /* ===== CONTACT INFO ===== */
  .contact-info-section {
    background-color: #f5f6f8;
    padding: 44px 0;
  }

  .contact-info-wrapper {
    text-align: center;
  }

  .contact-text {
    font-family: 'Lato', sans-serif;
    font-size: 1rem;
    color: #1d3d8c;
    font-weight: 700;
    line-height: 1.6;
    margin-bottom: 12px;
  }

  .contact-phones {
    display: flex;
    justify-content: center;
    gap: 0 6px;
    flex-wrap: wrap;
    font-family: 'Lato', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    color: #1d3d8c;
  }

  .contact-phones a {
    color: #1d3d8c;
    text-decoration: none;
  }

  .contact-phones .sep {
    color: #1d3d8c;
    padding: 0 6px;
  }

  /* ===== FOOTER ===== */
  footer {
    background-color: #1a1f2e;
    padding: 45px 0 20px;
  }

  .footer-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 40px 30px;
    border-bottom: 1px solid rgba(255,255,255,0.08);
  }

  .footer-col h4 {
    font-family: 'Lato', sans-serif;
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
    margin-bottom: 18px;
  }

  .footer-col ul {
    list-style: none;
  }

  .footer-col ul li {
    margin-bottom: 9px;
  }

  .footer-col ul li a {
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.6);
    text-decoration: none;
    transition: color 0.2s;
  }

  .footer-col ul li a:hover { color: #fff; }

  .footer-bottom {
    text-align: center;
    padding: 16px 0 0;
  }

  .footer-bottom p {
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    color: rgba(255,255,255,0.3);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 900px) {
    .destinations-grid { grid-template-columns: repeat(2, 1fr); }
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
    .testimonials-inner { flex-direction: column; text-align: center; }
  }

  @media (max-width: 600px) {
    .destinations-grid { grid-template-columns: 1fr; }
    .footer-grid { grid-template-columns: 1fr; }
    .nav-links { display: none; }
    .slide-title { font-size: 2rem; }
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav>
  <div class="nav-inner">
  <a href="#" class="nav-logo">
    <!-- SVG Celtic Trekking logo placeholder -->
    <svg class="nav-logo-icon" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
      <polygon points="21,4 36,34 6,34" fill="none" stroke="#7ab4e8" stroke-width="2"/>
      <polygon points="21,10 32,30 10,30" fill="none" stroke="#7ab4e8" stroke-width="1.2"/>
      <circle cx="21" cy="21" r="4" fill="#7ab4e8"/>
    </svg>
    <div class="nav-logo-text">
      <span class="brand">Celtic Trekking</span>
      <span class="sub">Adventure</span>
    </div>
  </a>
  <ul class="nav-links">
    <li><a href="#" class="active">Accueil</a></li>
    <li><a href="#">Trekking</a></li>
    <li><a href="#">Départs Fixes</a></li>
    <li><a href="#">L'Agence Celtic</a></li>
    <li><a href="#">Témoignage</a></li>
  </ul>
  </div>
</nav>

<!-- HERO SLIDER -->
<section class="hero-slider" id="hero-slider">
  <div class="slider-wrapper">

    <div class="slide active" data-slide="0">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1519682577862-22b62b24e493?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Roumanie</h2>
          <p class="slide-subtitle">Une destination aux paysages variés et somptueux injustement méconnue</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="1">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Népal</h2>
          <p class="slide-subtitle">Immersion au cœur des vallées sacrées de l'Himalaya</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="2">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1493558103817-58b2924bce98?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Maroc</h2>
          <p class="slide-subtitle">Dunes et kasbahs, une aventure authentique au cœur du désert</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="3">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Tibet</h2>
          <p class="slide-subtitle">Des paysages himalayens inoubliables au toit du monde</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="4">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1501854140801-50d01698950b?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Himalaya</h2>
          <p class="slide-subtitle">Partez à la conquête des sommets légendaires</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
        </div>
      </div>
    </div>

    <div class="slide" data-slide="5">
      <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');">
        <div class="slide-overlay"></div>
        <div class="slide-content">
          <h2 class="slide-title">Aventure</h2>
          <p class="slide-subtitle">Explorez les sentiers les plus beaux du monde avec nos guides</p>
          <a href="#" class="btn-slide">En Savoir Plus</a>
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
    <h2 class="tagline-text">Voyagez, marchez, découvrez avec Celtic Trekking</h2>
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
      <a href="#" class="btn-contact">Contactez-nous</a>
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
          <blockquote class="t-quote">"Une expérience inoubliable, je recommande vivement Celtic Trekking à tous les amoureux de la nature."</blockquote>
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
        N'hésitez pas à nous appeler si vous souhaitez une information<br>
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

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <h4>Trekking</h4>
      <ul>
        <li><a href="#">Trekking Népal</a></li>
        <li><a href="#">Trekking Tibet</a></li>
        <li><a href="#">Trekking Maroc</a></li>
        <li><a href="#">Trekking Roumanie</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Plan du Site</h4>
      <ul>
        <li><a href="#">Départs Fixes</a></li>
        <li><a href="#">Agence Celtic Trekking</a></li>
        <li><a href="#">Nos Clients Témoignent</a></li>
        <li><a href="#">Contactez-nous</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Partenaires</h4>
      <ul>
        <li><a href="#">Guide du Routard</a></li>
        <li><a href="#">Népal Moutaineering</a></li>
        <li><a href="#">Welcome Népal</a></li>
        <li><a href="#">Trekking Agencies Népal</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Partenaires</h4>
      <ul>
        <li><a href="#">Traveling Népal</a></li>
        <li><a href="#">Le Yeti – Magasin Spécialisé</a></li>
        <li><a href="#">Paulines Guesthouse</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>2022 – Celtic Trekking</p>
  </div>
</footer>

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