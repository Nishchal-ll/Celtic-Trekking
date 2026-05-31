<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Témoignages – Celtic Trekking</title>
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

  .nav-links a:hover { color: #fff; }
  .nav-links a.active { color: #6faee8; }

  /* ===== HERO BANNER ===== */
  .page-hero {
    position: relative;
    width: 100%;
    height: 260px;
    overflow: hidden;
  }

  .page-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('https://images.unsplash.com/photo-1469521669194-babb45599def?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center 30%;
  }

  .page-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.25);
  }

  .page-hero-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    display: inline-block;
    padding: 12px 30px;
    background-color: #3a6fd8;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border-radius: 2px;
    transition: background-color 0.3s;
  }

  .page-hero-btn:hover { background-color: #2b5cb3; }

  /* ===== PAGE TITLE BAR ===== */
  .page-title-bar {
    background-color: #1d3d8c;
    padding: 20px 0;
    text-align: center;
  }

  .page-title-bar h1 {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.9rem;
    font-weight: 400;
    color: #fff;
    letter-spacing: 1px;
  }

  /* ===== TESTIMONIALS CAROUSEL ===== */
  .temoignages-section {
    background-color: #f0f0f0;
    padding: 50px 0 60px;
    position: relative;
  }

  .temoignages-viewport {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 60px;
    position: relative;
    overflow: hidden;
  }

  .temoignages-track {
    display: flex;
    gap: 24px;
    transition: transform 0.5s ease;
  }

  /* Each "page" shows 3 cards at once */
  .temoignage-card {
    flex: 0 0 calc((100% - 48px) / 3);
    background-color: #e8e8e8;
    border-radius: 2px;
    padding: 30px 28px 50px;
    position: relative;
    min-height: 380px;
  }

  /* Speech bubble tail */
  .temoignage-card::after {
    content: '';
    position: absolute;
    bottom: -18px;
    left: 50%;
    transform: translateX(-50%);
    width: 0; height: 0;
    border-left: 16px solid transparent;
    border-right: 16px solid transparent;
    border-top: 18px solid #e8e8e8;
  }

  .card-header {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 16px;
  }

  .card-avatar {
    width: 52px;
    height: 52px;
    border-radius: 50%;
    background-color: #c0c4ce;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: #fff;
    font-size: 1.4rem;
  }

  .card-meta {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .card-name {
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    font-weight: 700;
    font-style: italic;
    color: #1b2a4a;
    margin-bottom: 2px;
  }

  .card-trek {
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    font-style: italic;
    color: #1b2a4a;
  }

  .card-text {
    font-family: 'Lato', sans-serif;
    font-size: 0.85rem;
    font-style: italic;
    line-height: 1.7;
    color: #444;
  }

  /* Carousel arrows */
  .carousel-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: none;
    border: none;
    color: #aaa;
    font-size: 1.3rem;
    cursor: pointer;
    padding: 8px;
    transition: color 0.2s;
  }

  .carousel-arrow:hover { color: #555; }
  .carousel-prev { left: 0; }
  .carousel-next { right: 0; }

  /* Carousel dots */
  .carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 50px;
  }

  .carousel-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: transparent;
    border: 2px solid #aaa;
    cursor: pointer;
    padding: 0;
    transition: all 0.3s;
  }

  .carousel-dot.active {
    background-color: #666;
    border-color: #666;
  }

  /* ===== SHARE BANNER ===== */
  .share-banner {
    background-color: #1d3d8c;
    padding: 22px 0;
    text-align: center;
  }

  .share-banner p {
    font-family: 'Lato', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: #fff;
    letter-spacing: 0.5px;
  }

  /* ===== SOCIAL STRIP ===== */
  .social-strip {
    background-color: #1a2a4a;
    padding: 18px 0;
    text-align: center;
  }

  .social-strip-inner {
    display: inline-flex;
    align-items: center;
    gap: 20px;
    color: rgba(255,255,255,0.85);
    font-size: 1.1rem;
  }

  .social-strip-inner span.divider {
    display: inline-block;
    width: 1px;
    height: 28px;
    background-color: rgba(255,255,255,0.3);
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
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px 30px;
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

  .footer-col ul { list-style: none; }

  .footer-col ul li { margin-bottom: 9px; }

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
    .temoignage-card { flex: 0 0 calc((100% - 24px) / 2); }
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 600px) {
    .temoignage-card { flex: 0 0 100%; }
    .footer-grid { grid-template-columns: 1fr; }
    .nav-links { display: none; }
  }
</style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav>
  <div class="nav-inner">
    <a href="index.html" class="nav-logo">
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
      <li><a href="index.html">Accueil</a></li>
      <li><a href="#">Trekking</a></li>
      <li><a href="#">Départs Fixes</a></li>
      <li><a href="#">L'Agence Celtic</a></li>
      <li><a href="#" class="active">Témoignage</a></li>
    </ul>
  </div>
</nav>

<!-- ===== HERO BANNER ===== -->
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <a href="#" class="page-hero-btn">A Propos de Celtic Trekking</a>
</section>

<!-- ===== PAGE TITLE BAR ===== -->
<div class="page-title-bar">
  <h1>Nos Clients témoignent</h1>
</div>

<!-- ===== TESTIMONIALS CAROUSEL ===== -->
<section class="temoignages-section">
  <div class="temoignages-viewport">

    <button class="carousel-arrow carousel-prev" id="carouselPrev">
      <i class="fa fa-chevron-left"></i>
    </button>

    <div class="temoignages-track" id="carouselTrack">

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Philippe Rome , La route du Sel</span>
          </div>
        </div>
        <p class="card-text">Nous allons partir en trek pour la 4ème fois avec Celtic Trekking toujours avec le même plaisir. Après le tour des Annapurnas, le Manaslu et le Langtang nous allons partir le 29 mars pour la Route du sel.Bonne année</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Kato Doms</span>
            <span class="card-trek">Manaslu Circuit on March 2025</span>
          </div>
        </div>
        <p class="card-text">Fantastic Manaslu Trekking with Celtic Trekking March 2025. We recently completed the Manaslu Trek in Nepal, organized by Celtic Trekking. Our experience was exceptional from start to finish. Communication with Uddhav prior to the trek was smooth and efficient. He welcomed us at the airport upon arrival and provided all the necessary information for a seamless trip. The trek itself was guided by Pawan, who was incredibly professional, knowledgeable, and fluent in both English and French. He had extensive experience and a deep understanding of trekking and the mountains, which made the whole experience even more enjoyable. He was punctual,</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Isabelle Kretz</span>
            <span class="card-trek">Balcon des Annapurnas, Bardiya et plantation de thé du 13 Mars au 3 Avril 2023</span>
          </div>
        </div>
        <p class="card-text">Nous sommes tous enchantés, pour la gestion du dossier, de la prise en compte de nos demandes tant avant notre venue au Népal, que sur place. Toutes nos demandes ont été prises en compte. Excellent contact avec Uddhav, aussi gentil qu'efficace.</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Famille Defranoux</span>
            <span class="card-trek">Trek Annapurnas – Novembre 2024</span>
          </div>
        </div>
        <p class="card-text">Trek exceptionnel dans le circuit des Annapurnas avec guide sympa, attentif, à l'écoute et intéressant ainsi que les porteurs. Ambiance joviale et musicale certains soirs. Merci beaucoup à tous.</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Georges &amp; Michèle</span>
            <span class="card-trek">Tour des Annapurnas – Octobre 2024</span>
          </div>
        </div>
        <p class="card-text">Parfaitement organisé, nous avons ainsi profité au maximum de notre voyage ! Guide très compétent, attentif et sympathique. Logistique impeccable du début à la fin. Nous reviendrons sans hésiter.</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Marie Jadis</span>
            <span class="card-trek">Trek Everest Base Camp – 2024</span>
          </div>
        </div>
        <p class="card-text">Des guides d'un grand professionnalisme et d'une attention de tous les instants. Une expérience humaine autant que sportive. Je recommande Celtic Trekking à tous ceux qui souhaitent vivre une aventure authentique au Népal.</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Jean-Pierre Martin</span>
            <span class="card-trek">Trek Langtang – Septembre 2023</span>
          </div>
        </div>
        <p class="card-text">Une organisation sans faille, un guide passionné et cultivé. Le trek Langtang est magnifique et les villages traversés sont d'une authenticité rare. Celtic Trekking a su rendre cette aventure inoubliable.</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Sophie &amp; Laurent Durand</span>
            <span class="card-trek">Circuit Mustang – Avril 2023</span>
          </div>
        </div>
        <p class="card-text">Un voyage hors du commun dans le royaume interdit du Mustang. Paysages lunaires, villages préservés, monastères tibétains… Celtic Trekking nous a offert une immersion totale dans une culture millénaire. Merci infiniment !</p>
      </div>

      <div class="temoignage-card">
        <div class="card-header">
          <div class="card-avatar"><i class="fa fa-user"></i></div>
          <div class="card-meta">
            <span class="card-name">Claire Beaumont</span>
            <span class="card-trek">Trek Manaslu – Octobre 2022</span>
          </div>
        </div>
        <p class="card-text">Troisième trek avec Celtic Trekking et toujours la même qualité de service. Uddhav est très réactif et arrangeant. Notre guide Dawa était formidable, toujours de bonne humeur même dans les moments difficiles.</p>
      </div>

    </div>

    <button class="carousel-arrow carousel-next" id="carouselNext">
      <i class="fa fa-chevron-right"></i>
    </button>

  </div>

  <!-- Dots -->
  <div class="carousel-dots" id="carouselDots"></div>
</section>

<!-- ===== SHARE BANNER ===== -->
<div class="share-banner">
  <p>Partagez votre aventure avec vos proches</p>
</div>

<!-- ===== SOCIAL STRIP ===== -->
<div class="social-strip">
  <div class="social-strip-inner">
    <i class="fa fa-heart"></i>
    <span class="divider"></span>
    <i class="fa fa-heart"></i>
    <span class="divider"></span>
    <i class="fa fa-heart"></i>
  </div>
</div>

<!-- ===== FOOTER ===== -->
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

  const track = document.getElementById('carouselTrack');
  const cards = Array.from(track.querySelectorAll('.temoignage-card'));
  const dotsContainer = document.getElementById('carouselDots');
  const prevBtn = document.getElementById('carouselPrev');
  const nextBtn = document.getElementById('carouselNext');

  let cardsPerPage = 3;
  let currentPage = 0;

  function getCardsPerPage() {
    if (window.innerWidth <= 600) return 1;
    if (window.innerWidth <= 900) return 2;
    return 3;
  }

  function totalPages() {
    return Math.ceil(cards.length / cardsPerPage);
  }

  function buildDots() {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalPages(); i++) {
      const dot = document.createElement('button');
      dot.className = 'carousel-dot' + (i === currentPage ? ' active' : '');
      dot.addEventListener('click', () => goTo(i));
      dotsContainer.appendChild(dot);
    }
  }

  function goTo(page) {
    const pages = totalPages();
    currentPage = (page + pages) % pages;

    // Card width + gap
    const cardWidth = cards[0].offsetWidth;
    const gap = 24;
    const offset = currentPage * cardsPerPage * (cardWidth + gap);
    track.style.transform = `translateX(-${offset}px)`;

    // Update dots
    const dots = dotsContainer.querySelectorAll('.carousel-dot');
    dots.forEach((d, i) => d.classList.toggle('active', i === currentPage));
  }

  function init() {
    cardsPerPage = getCardsPerPage();
    currentPage = 0;
    track.style.transform = 'translateX(0)';
    buildDots();
  }

  prevBtn.addEventListener('click', () => goTo(currentPage - 1));
  nextBtn.addEventListener('click', () => goTo(currentPage + 1));

  window.addEventListener('resize', init);

  init();

  // Auto advance every 6 seconds
  setInterval(() => goTo(currentPage + 1), 6000);
});
</script>
</body>
</html>