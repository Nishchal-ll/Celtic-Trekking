<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trekking au Népal – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'Lato', sans-serif;
    background: #fff;
    color: #333;
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

  .nav-logo-icon { width: 42px; height: 42px; }

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
    height: 400px;
    overflow: hidden;
  }

  .page-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center 40%;
  }

  .page-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.30);
  }

  .page-hero-content {
    position: absolute;
    inset: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    z-index: 2;
    text-align: center;
    padding: 0 20px;
  }

  .page-hero-title {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 3rem;
    font-weight: 400;
    color: #fff;
    margin-bottom: 16px;
    text-shadow: 0 2px 8px rgba(0,0,0,0.4);
  }

  .page-hero-subtitle {
    display: inline-block;
    background-color: rgba(255,255,255,0.15);
    color: #fff;
    font-family: 'Lato', sans-serif;
    font-size: 1rem;
    padding: 8px 20px;
    letter-spacing: 0.5px;
  }

  .hero-scroll-hint {
    position: absolute;
    bottom: 18px;
    left: 50%;
    transform: translateX(-50%);
    color: rgba(255,255,255,0.8);
    font-size: 1.2rem;
    animation: bounce 1.8s infinite;
    z-index: 2;
  }

  @keyframes bounce {
    0%, 100% { transform: translateX(-50%) translateY(0); }
    50%       { transform: translateX(-50%) translateY(6px); }
  }

  /* ===== INTRO SECTION ===== */
  .intro-section {
    background: #fff;
    padding: 50px 0 40px;
  }

  .intro-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 50px;
    align-items: start;
  }

  .intro-text h2 {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.7rem;
    font-weight: 400;
    color: #1b2a4a;
    margin-bottom: 20px;
  }

  .intro-text p {
    font-size: 0.9rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 16px;
    text-align: justify;
  }

  .intro-text p strong {
    color: #1b2a4a;
    font-weight: 700;
  }

  .intro-text p a {
    color: #3a6fd8;
    text-decoration: none;
  }

  .btn-devis {
    display: inline-block;
    padding: 13px 30px;
    background-color: #3a6fd8;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-radius: 3px;
    margin-top: 20px;
    transition: background-color 0.3s;
  }

  .btn-devis:hover { background-color: #2b5cb3; }

  .intro-slider {
    position: relative;
    width: 100%;
    aspect-ratio: 4/3;
    overflow: hidden;
    background: #eee;
  }

  .intro-slider img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: none;
  }

  .intro-slider img.active { display: block; }

  .slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.35);
    color: #fff;
    border: none;
    cursor: pointer;
    width: 36px;
    height: 36px;
    font-size: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 5;
    transition: background 0.2s;
  }

  .slider-arrow:hover { background: rgba(0,0,0,0.6); }
  .slider-arrow.prev { left: 0; }
  .slider-arrow.next { right: 0; }

  /* ===== INFO STRIP ===== */
  .info-strip {
    background: #f5f5f5;
    border-top: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
    padding: 28px 0;
  }

  .info-strip-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    font-size: 0.9rem;
    line-height: 1.85;
    color: #444;
  }

  .info-strip-inner p { margin-bottom: 14px; }
  .info-strip-inner p:last-child { margin-bottom: 0; }

  .info-strip-inner strong { color: #1b2a4a; }

  /* ===== DIFFICULTY CARDS ===== */
  .circuits-section {
    background: #f5f5f5;
    padding: 50px 0;
  }

  .circuits-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .section-heading {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.6rem;
    font-weight: 400;
    color: #1b2a4a;
    text-align: center;
    margin-bottom: 36px;
  }

  .diff-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  .diff-card {
    background-color: #2a4a8c;
    color: #fff;
    padding: 30px 26px 26px;
    border-radius: 2px;
    display: flex;
    flex-direction: column;
  }

  .diff-card h3 {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.15rem;
    font-weight: 700;
    text-align: center;
    margin-bottom: 14px;
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(255,255,255,0.25);
  }

  .diff-card .desc {
    font-size: 0.85rem;
    line-height: 1.7;
    color: rgba(255,255,255,0.88);
    margin-bottom: 18px;
  }

  .diff-card ul {
    list-style: none;
    padding: 0;
    margin-bottom: 18px;
    flex: 1;
  }

  .diff-card ul li {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.9);
    padding: 4px 0;
    padding-left: 18px;
    position: relative;
  }

  .diff-card ul li::before {
    content: '►';
    position: absolute;
    left: 0;
    font-size: 0.65rem;
    top: 6px;
    color: rgba(255,255,255,0.7);
  }

  .diff-card ul li strong { color: #fff; }

  .diff-card .note {
    font-size: 0.78rem;
    color: rgba(255,255,255,0.6);
    font-style: italic;
    margin-bottom: 18px;
  }

  .diff-card-divider {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.2);
    margin: 4px 0 18px;
  }

  .btn-savoir {
    display: inline-block;
    padding: 11px 20px;
    background-color: transparent;
    color: #fff;
    border: 2px solid rgba(255,255,255,0.7);
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    text-align: center;
    transition: background 0.2s, border-color 0.2s;
  }

  .btn-savoir:hover {
    background-color: rgba(255,255,255,0.15);
    border-color: #fff;
  }

  /* ===== DETAIL SECTION ===== */
  .detail-section {
    background: #fff;
    padding: 60px 0;
  }

  .detail-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .detail-section .section-heading {
    margin-bottom: 8px;
  }

  .detail-section .section-sub {
    text-align: center;
    font-size: 0.88rem;
    color: #666;
    margin-bottom: 32px;
  }

  /* Trek Tabs */
  .trek-tabs {
    display: flex;
    flex-wrap: wrap;
    gap: 0;
    border-bottom: none;
    margin-bottom: 0;
  }

  .trek-tab-btn {
    padding: 10px 20px;
    font-family: 'Lato', sans-serif;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 0.5px;
    border: 1px solid #ccc;
    border-bottom: none;
    background: #e8e8e8;
    color: #555;
    cursor: pointer;
    margin-right: 2px;
    margin-bottom: 2px;
    transition: background 0.2s, color 0.2s;
  }

  .trek-tab-btn:hover { background: #ddd; }

  .trek-tab-btn.active {
    background-color: #3a6fd8;
    color: #fff;
    border-color: #3a6fd8;
  }

  .trek-tab-panel { display: none; }
  .trek-tab-panel.active { display: block; }

  /* Trek Detail Layout */
  .trek-detail-grid {
    display: grid;
    grid-template-columns: 480px 1fr;
    gap: 0;
    border: 1px solid #ddd;
  }

  .trek-detail-left {
    padding: 0;
  }

  .trek-detail-left img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
    display: block;
  }

  .trek-detail-meta {
    padding: 20px 22px;
    background: #fff;
  }

  .trek-detail-meta p {
    font-size: 0.88rem;
    color: #444;
    margin-bottom: 8px;
    line-height: 1.6;
  }

  .trek-detail-meta p strong { color: #1b2a4a; }

  .trek-detail-meta .desc-text {
    font-size: 0.87rem;
    color: #555;
    line-height: 1.75;
    margin-top: 12px;
    margin-bottom: 18px;
  }

  .trek-detail-right {
    background: #ebebeb;
    padding: 22px 24px;
    overflow-y: auto;
    max-height: 560px;
  }

  .day-item {
    margin-bottom: 12px;
    font-size: 0.86rem;
    line-height: 1.6;
    color: #333;
  }

  .day-item strong { color: #1b2a4a; }

  .detail-btns {
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 0 22px 22px;
  }

  .btn-info {
    display: inline-block;
    padding: 12px 22px;
    background-color: #3a6fd8;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 2px;
    text-align: center;
    transition: background 0.2s;
  }

  .btn-info:hover { background-color: #2b5cb3; }

  .btn-temoignage {
    display: inline-block;
    padding: 12px 22px;
    background-color: #2a2a2a;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 2px;
    text-align: center;
    transition: background 0.2s;
  }

  .btn-temoignage:hover { background-color: #111; }

  .btn-departs {
    display: inline-block;
    padding: 12px 22px;
    background-color: #1b2a4a;
    color: #fff;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.8rem;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 2px;
    text-align: center;
    transition: background 0.2s;
  }

  .btn-departs:hover { background-color: #0f1a30; }

  /* ===== SHARE BANNER ===== */
  .share-banner {
    background-color: #1d3d8c;
    padding: 32px 0;
    text-align: center;
  }

  .share-banner p {
    font-family: 'Lato', sans-serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 18px;
  }

  .share-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
  }

  .share-icons a {
    color: rgba(255,255,255,0.75);
    font-size: 1.3rem;
    text-decoration: none;
    transition: color 0.2s;
  }

  .share-icons a:hover { color: #fff; }

  .share-icons .divider {
    width: 1px;
    height: 28px;
    background: rgba(255,255,255,0.3);
    display: inline-block;
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

  .footer-bottom { text-align: center; padding: 16px 0 0; }

  .footer-bottom p {
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    color: rgba(255,255,255,0.3);
  }

  /* ===== RESPONSIVE ===== */
  @media (max-width: 960px) {
    .intro-inner { grid-template-columns: 1fr; }
    .diff-cards { grid-template-columns: 1fr; }
    .trek-detail-grid { grid-template-columns: 1fr; }
    .trek-detail-right { max-height: 400px; }
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
    .page-hero { height: 280px; }
    .page-hero-title { font-size: 2.2rem; }
  }

  @media (max-width: 600px) {
    .nav-links { display: none; }
    .footer-grid { grid-template-columns: 1fr; }
    .page-hero { height: 200px; }
    .page-hero-title { font-size: 1.7rem; }
    .diff-cards { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

{{-- ===== NAVBAR ===== --}}
<nav>
  <div class="nav-inner">
    <a href="{{ route('home') }}" class="nav-logo">
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
      <li><a href="{{ route('home') }}">Accueil</a></li>
      <li><a href="{{ route('trekking') }}" class="active">Trekking</a></li>
      <li><a href="{{ route('departures') }}">Départs Fixes</a></li>
      <li><a href="{{ route('agency') }}">L'Agence Celtic</a></li>
      <li><a href="{{ route('testimonials') }}">Témoignage</a></li>
    </ul>
  </div>
</nav>

{{-- ===== HERO ===== --}}
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-content">
    <h1 class="page-hero-title">Trekking au Népal</h1>
    <p class="page-hero-subtitle">Le Népal est un escalier monumental dont le sommet se perd dans les nuages</p>
  </div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

{{-- ===== INTRO SECTION ===== --}}
<section class="intro-section">
  <div class="intro-inner">
    <div class="intro-text">
      <h2>Nos circuits de treks au Népal</h2>
      <p>
        Olivier KERVIEL, sa femme népalaise, leur équipe, vous invitent à découvrir ce magnifique royaume hindou
        perché sur les contreforts de l'Himalaya. <strong>Au Népal, chacun trouvera son bonheur</strong>, le
        « trekkeur » randonneur de montagnes, le rafteur de rivières, l'enthousiaste de vie sauvage, le poète,
        l'artiste, l'érudit ou tout simplement le curieux. « Le Népal est un escalier monumental dont le sommet
        se perd dans les nuages. »
      </p>
      <p>
        Le « toit du monde », refuge du Yeti et des dieux, prend paradoxalement naissance dans une jungle
        luxuriante habitée par des animaux sauvages. Une telle diversité ne peut laisser indifférent. Quant en
        plus, vous savez que les Népalais, leurs langues et leurs coutumes sont aussi variés que le sol lui-même,
        plus rien ne vous arrête pour visiter ce magnifique pays qu'est le Népal. Venez le faire avec nous !
      </p>
      <a href="{{ route('contact') }}" class="btn-devis">Je demande un devis</a>
    </div>

    {{-- Image Slider --}}
    <div class="intro-slider" id="introSlider">
      <img src="https://images.unsplash.com/photo-1551632436-cbf8dd35adfa?auto=format&fit=crop&w=800&q=80" alt="Trekkers au Népal" class="active">
      <img src="https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=800&q=80" alt="Vue Himalaya">
      <img src="https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=800&q=80" alt="Montagne enneigée">
      <button class="slider-arrow prev" id="sliderPrev"><i class="fa fa-chevron-left"></i></button>
      <button class="slider-arrow next" id="sliderNext"><i class="fa fa-chevron-right"></i></button>
    </div>
  </div>
</section>

{{-- ===== INFO STRIP ===== --}}
<section class="info-strip">
  <div class="info-strip-inner">
    <p>
      <strong>Le Népal est un paradis pour le trekkeur.</strong> Des longues randonnées sur le relief chaotique des plus hauts sommets du monde
      (Everest, Makalu, Annapurna) ou sorties plus courtes et plus proches, CELTIC TREKKING organise pour vous des trekking en bivouac – porteurs,
      guides, matériel de camping, matériel de cuisine, cuisinier, permis, repas, transport. Ou des treks en chalets/Lodges – guides, porteurs,
      hébergement et repas en Lodge tout au long de l'itinéraire, permis, transport – Tous les niveaux de difficultés sont présents, de la marche
      en basse montagne à l'expédition en haute altitude.
    </p>
    <p>
      Grâce à notre petite structure et notre flexibilité, nous pouvons arranger vos treks individuels « classiques » à partir de 2 participants et
      les bivouacs à partir de 4 personnes. Pas de craintes de vous retrouver dans « un troupeau » de 20 touristes.
      <strong>Nos groupes et départs fixes sont limités à 10 participants afin que cela reste convivial</strong> et que chacun puisse profiter du
      guide et de ses qualités. Trouvez ci-dessous des exemples de trek. Cette liste n'est pas exhaustive, consultez nous pour d'autres randonnées.
    </p>
  </div>
</section>

{{-- ===== DIFFICULTY CARDS ===== --}}
<section class="circuits-section">
  <div class="circuits-inner">
    <h2 class="section-heading">Découvrez les circuits proposés par l'agence Celtic Trekking</h2>

    <div class="diff-cards">

      {{-- Card 1 --}}
      <div class="diff-card">
        <h3>Treks de niveau Facile / Moyen</h3>
        <p class="desc">
          Ces treks sont plutôt de courte durée (environ une semaine), ne connaissent pas une altitude supérieure à
          4000 m et ne requiers pas forcément une grande condition physique, même si cela demande quand même quelques
          efforts et des journées de 4/5 heures de marche.
        </p>
        <ul>
          <li><strong>Trekking Vallée :</strong> 4 jours – 2600 m*</li>
          <li><strong>Helambu :</strong> 8 jours – 3500 m*</li>
          <li><strong>Gorepani :</strong> 7 jours – 3200 m*</li>
          <li><strong>Langtang :</strong> 8 jours – 5030 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

      {{-- Card 2 --}}
      <div class="diff-card">
        <h3>Treks de niveau Moyen+ / Difficile</h3>
        <p class="desc">
          Ces treks sont généralement compris entre 10 et 20 jours, vous mènent au-dessus de 4000m d'altitude et
          demandent une bonne condition physique.
        </p>
        <ul>
          <li><strong>Langtang / Gosainkund :</strong> 12 jours – 4600 m*</li>
          <li><strong>Camp base Annapurna :</strong> 12 jours – 4100 m*</li>
          <li><strong>Langtang / Helambu :</strong> 14 jours – 4600 m*</li>
          <li><strong>Tour des Annapurnas :</strong> 14-19 jours – 5400 m*</li>
          <li><strong>Everest / Gokyo :</strong> 13-18 jours – 5550 m*</li>
          <li><strong>Mustang :</strong> 14 jours – 3900 m*</li>
          <li><strong>Bas Dolpo :</strong> 12-25 jours – 5100 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

      {{-- Card 3 --}}
      <div class="diff-card">
        <h3>Treks de niveau Difficile / Sportif</h3>
        <p class="desc">
          Ce sont des treks de longues durées (15 à 30 jours), qui fréquentent de hautes altitudes et nécessitent
          une bonne acclimatation (+ de 5000m). Ils sont destinés à des gens en très bonne condition physique et qui
          ont l'expérience de la haute montagne, les conditions étant parfois difficiles : froid, vent, neige.
        </p>
        <ul>
          <li><strong>Camp de Base du Makalu :</strong> 18 jours – 5700 m*</li>
          <li><strong>Langtang / Ganja La :</strong> 14-16 jours – 5100 m*</li>
          <li><strong>Tour du Manaslu :</strong> 15-18 jours – 5300 m*</li>
        </ul>
        <p class="note">* maximum</p>
        <hr class="diff-card-divider">
        <a href="{{ route('contact') }}" class="btn-savoir">Je souhaite en savoir plus</a>
      </div>

    </div>
  </div>
</section>

{{-- ===== TREK DETAIL SECTION ===== --}}
<section class="detail-section">
  <div class="detail-inner">
    <h2 class="section-heading">Quelques treks dans le détail</h2>
    <p class="section-sub">
      Après cette rapide présentation des trekkings selon leurs difficultés, voici le détail de quelques uns,<br>
      en tout cas pour les plus classiques d'entre eux.
    </p>

    {{-- Trek Tab Buttons --}}
    <div class="trek-tabs" id="trekTabs">
      <button class="trek-tab-btn active" data-trek="annapurnas">Tour Des Annapurnas</button>
      <button class="trek-tab-btn" data-trek="langtang">Langtang / Gosainkund / Helambu</button>
      <button class="trek-tab-btn" data-trek="everest">Everest Base Camp / Gokyo</button>
      <button class="trek-tab-btn" data-trek="mustang">Mustang Trek</button>
      <button class="trek-tab-btn" data-trek="tamang">Tamang Heritage Trail</button>
      <button class="trek-tab-btn" data-trek="panch">Panch Pokhari</button>
      <button class="trek-tab-btn" data-trek="safari">Safari et Rafting</button>
      <button class="trek-tab-btn" data-trek="balcon">Balcon des Annapurnas</button>
      <button class="trek-tab-btn" data-trek="helambu">Helambu</button>
      <button class="trek-tab-btn" data-trek="langtang2">Langtang</button>
      <button class="trek-tab-btn" data-trek="kathmandu">Balade dans la vallée de Kathmandu</button>
    </div>

    {{-- Tour des Annapurnas --}}
    <div class="trek-tab-panel active" id="trek-annapurnas">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/photo-1589553416260-f586c8f1514f?auto=format&fit=crop&w=800&q=80" alt="Tour des Annapurnas">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> En lodge</p>
            <p><strong>Durée :</strong> 2 jour d'accès<br>17 jours de marche (version longue) / 12 jours (version courte)</p>
            <p><strong>Difficulté :</strong> Moyen +B.</p>
            <p><strong>Précisions :</strong></p>
            <p class="desc-text">
              Surement l'un des plus beaux treks du Népal. On dit même que c'est le plus beau trek du monde.
              Des paysages extrêmement variés rythment les journées de marche. L'aspect culturel est
              également très riche avec de nombreuses ethnies croisées au fil des jours. Vues de sommets
              magnifiques avec en point d'orgue le passage du col de Thorong.
            </p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">Je souhaite un complément d'informations</a>
            <a href="{{ route('testimonials') }}" class="btn-temoignage">Nos clients témoignent</a>
            <a href="{{ route('departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right">
          <div class="day-item"><strong>JOUR 01 :</strong> Kathmandu – Bulbule (transport en bus le long de villages et rizières)</div>
          <div class="day-item"><strong>JOUR 02 :</strong> Bulbule – Bahundanda (750-1300m) 5h en longeant la rivière Marsyangdi.</div>
          <div class="day-item"><strong>JOUR 03 :</strong> Bahundanda – Chiamje (1300-1450m) 4h30. Entre falaises et rivière, les premières maisons tibétaines.</div>
          <div class="day-item"><strong>JOUR 04 :</strong> Chiamje – Bagarchap (1450-2150m) 5h.</div>
          <div class="day-item"><strong>JOUR 05 :</strong> Bagarchap – Chame (2150-2650m) 5h30. La forêt remplace les champs en terrasses.</div>
          <div class="day-item"><strong>JOUR 06 :</strong> Chame – Pisang (2650-3200m) 5h. Très beaux paysages alpins. La vallée s'élargit.</div>
          <div class="day-item"><strong>JOUR 07 :</strong> Pisang – Manang (3200-3540m) 4h30.</div>
          <div class="day-item"><strong>JOUR 08 :</strong> Journée d'acclimatation à Manang. Possibilité de monter jusqu'au village de Kanghsar ou de vous reposer et balader dans les ruelles de Manang.</div>
          <div class="day-item"><strong>JOUR 09 :</strong> Manang – Letdar (3500-4200m) 5h. Longue montée très régulière. Vues panoramiques sur la chaîne des Annapurnas.</div>
          <div class="day-item"><strong>JOUR 10 :</strong> Letdar – Thorong Phedi ou High Camp (4200-4700m) 4h.</div>
          <div class="day-item"><strong>JOUR 11 :</strong> Thorong Phedi – Thorung La – Muktinath (4700-5416-3700m) 7h. Départ matinal en direction du col (environ 3h d'ascension). Redescente vers Muktinath, près du royaume du Mustang.</div>
          <div class="day-item"><strong>JOUR 12 :</strong> Muktinath – Marpha (3700-2590m) 6h. Paysage minéral et falaises sculptées OU stop à Jomsom pour version courte avec vol pour Pokhara le lendemain.</div>
          <div class="day-item"><strong>JOUR 13 :</strong> Marpha – Kalapani (2590-2500m) 5h30. Visite de Marpha, superbe village parmi les champs de pommiers. Traversée de forêts.</div>
          <div class="day-item"><strong>JOUR 14 :</strong> Kalapani – Tatopani (2500-1200m) 5h. On retrouve les terres cultivées. Sources d'eau chaude.</div>
          <div class="day-item"><strong>JOUR 15 :</strong> Tatopani – Ghorepani (1200-2800m) 6h30. Longue journée à travers villages et champs en terrasses. Dernière portion raide à travers une forêt de rhododendrons.</div>
          <div class="day-item"><strong>JOUR 16 :</strong> Ghorepani – Tadapani (2500m) via Poon Hill à 3200m. 5h30.</div>
          <div class="day-item"><strong>JOUR 17 :</strong> Tadapani – Ghandrung (1950m), 4H30. Superbe village Gurung.</div>
          <div class="day-item"><strong>JOUR 18 :</strong> Ghandrung – Naya Pul (1100m) 5h. Puis route jusque Pokhara 1h. Hôtel en pension complète sur Lake Side.</div>
          <div class="day-item"><strong>JOUR 19 :</strong> Journée de retour vers Kathmandu par la route en bus touristique. Possibilité de prendre l'avion.</div>
        </div>
      </div>
    </div>

    {{-- Langtang Placeholder --}}
    <div class="trek-tab-panel" id="trek-langtang">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/photo-1605640840605-14ac1855827b?auto=format&fit=crop&w=800&q=80" alt="Langtang">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> En lodge</p>
            <p><strong>Durée :</strong> 12-14 jours</p>
            <p><strong>Difficulté :</strong> Moyen+</p>
            <p class="desc-text">Trek dans la belle vallée du Langtang, à seulement quelques heures de Kathmandu. Rencontres avec les peuples Tamang et Tibétains. Vues sublimes sur les sommets enneigés.</p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">Je souhaite un complément d'informations</a>
            <a href="{{ route('testimonials') }}" class="btn-temoignage">Nos clients témoignent</a>
            <a href="{{ route('departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right">
          <div class="day-item"><strong>JOUR 01 :</strong> Kathmandu – Syabrubesi (1470m) en bus.</div>
          <div class="day-item"><strong>JOUR 02 :</strong> Syabrubesi – Lama Hotel (2380m) 5h.</div>
          <div class="day-item"><strong>JOUR 03 :</strong> Lama Hotel – Langtang Village (3430m) 5-6h.</div>
          <div class="day-item"><strong>JOUR 04 :</strong> Langtang Village – Kyanjin Gompa (3870m) 3h.</div>
          <div class="day-item"><strong>JOUR 05 :</strong> Acclimatation à Kyanjin. Montée au Tsergo Ri (4984m).</div>
          <div class="day-item"><strong>JOUR 06 :</strong> Kyanjin – Lama Hotel (2380m) 6h.</div>
          <div class="day-item"><strong>JOUR 07 :</strong> Lama Hotel – Thulo Syabru (2230m).</div>
          <div class="day-item"><strong>JOUR 08 :</strong> Thulo Syabru – Sing Gompa (3330m) 4h.</div>
          <div class="day-item"><strong>JOUR 09 :</strong> Sing Gompa – Gosaikunda (4380m) 4h30. Lac sacré hindou.</div>
          <div class="day-item"><strong>JOUR 10 :</strong> Gosaikunda – Ghopte (3430m) via Lauribinayak (4610m).</div>
          <div class="day-item"><strong>JOUR 11 :</strong> Ghopte – Kutumsang (2470m) 5h30.</div>
          <div class="day-item"><strong>JOUR 12 :</strong> Kutumsang – Chisopani (2175m) 6h.</div>
          <div class="day-item"><strong>JOUR 13 :</strong> Chisopani – Kathmandu en bus.</div>
        </div>
      </div>
    </div>

    {{-- Other trek panels (simplified) --}}
    @foreach(['everest' => ['title'=>'Everest Base Camp / Gokyo','img'=>'photo-1516912481808-3406841bd33c','type'=>'En lodge','duree'=>'18 jours','diff'=>'Difficile'],
              'mustang' => ['title'=>'Mustang Trek','img'=>'photo-1517825738774-7de9363ef735','type'=>'En lodge','duree'=>'14 jours','diff'=>'Moyen'],
              'tamang'  => ['title'=>'Tamang Heritage Trail','img'=>'photo-1599427303058-f04cbcf4756f','type'=>'En lodge','duree'=>'10 jours','diff'=>'Facile/Moyen'],
              'panch'   => ['title'=>'Panch Pokhari','img'=>'photo-1464822759023-fed622ff2c3b','type'=>'En bivouac','duree'=>'12 jours','diff'=>'Moyen+'],
              'safari'  => ['title'=>'Safari et Rafting','img'=>'photo-1504432842672-1a4d20ad2bb5','type'=>'Hôtel / Camp','duree'=>'7 jours','diff'=>'Facile'],
              'balcon'  => ['title'=>'Balcon des Annapurnas','img'=>'photo-1576086213369-97a306d36557','type'=>'En lodge','duree'=>'7-9 jours','diff'=>'Facile/Moyen'],
              'helambu' => ['title'=>'Helambu','img'=>'photo-1559827291-72ee739d0d9a','type'=>'En lodge','duree'=>'8 jours','diff'=>'Facile'],
              'langtang2'=>['title'=>'Langtang','img'=>'photo-1605640840605-14ac1855827b','type'=>'En lodge','duree'=>'8 jours','diff'=>'Moyen'],
              'kathmandu'=>['title'=>'Balade dans la vallée de Kathmandu','img'=>'photo-1529978148899-c74e26e18cda','type'=>'En hôtel','duree'=>'3-4 jours','diff'=>'Facile']] as $key => $t)
    <div class="trek-tab-panel" id="trek-{{ $key }}">
      <div class="trek-detail-grid">
        <div class="trek-detail-left">
          <img src="https://images.unsplash.com/{{ $t['img'] }}?auto=format&fit=crop&w=800&q=80" alt="{{ $t['title'] }}">
          <div class="trek-detail-meta">
            <p><strong>Type :</strong> {{ $t['type'] }}</p>
            <p><strong>Durée :</strong> {{ $t['duree'] }}</p>
            <p><strong>Difficulté :</strong> {{ $t['diff'] }}</p>
            <p class="desc-text">Contactez-nous pour obtenir le programme détaillé de ce trek et toutes les informations nécessaires à la préparation de votre voyage.</p>
          </div>
          <div class="detail-btns">
            <a href="{{ route('contact') }}" class="btn-info">Je souhaite un complément d'informations</a>
            <a href="{{ route('testimonials') }}" class="btn-temoignage">Nos clients témoignent</a>
            <a href="{{ route('departures') }}" class="btn-departs">Nos départs fixes</a>
          </div>
        </div>
        <div class="trek-detail-right" style="display:flex;align-items:center;justify-content:center;">
          <p style="color:#666;font-size:0.9rem;text-align:center;">Programme détaillé disponible sur demande.<br>Contactez-nous pour plus d'informations.</p>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</section>

{{-- ===== SHARE BANNER ===== --}}
<section class="share-banner">
  <p>Vous avez aimé ce voyage, partagez votre aventure avec vos proches</p>
  <div class="share-icons">
    <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
    <span class="divider"></span>
    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
    <span class="divider"></span>
    <a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a>
  </div>
</section>

{{-- ===== FOOTER ===== --}}
<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <h4>Trekking</h4>
      <ul>
        <li><a href="{{ route('trekking') }}">Trekking Népal</a></li>
        <li><a href="#">Trekking Tibet</a></li>
        <li><a href="#">Trekking Maroc</a></li>
        <li><a href="#">Trekking Roumanie</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Plan du Site</h4>
      <ul>
        <li><a href="{{ route('departures') }}">Départs Fixes</a></li>
        <li><a href="{{ route('agency') }}">Agence Celtic Trekking</a></li>
        <li><a href="{{ route('testimonials') }}">Nos Clients Témoignent</a></li>
        <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
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

  // ===== Intro Slider =====
  const slides = document.querySelectorAll('#introSlider img');
  let current = 0;

  function showSlide(idx) {
    slides[current].classList.remove('active');
    current = (idx + slides.length) % slides.length;
    slides[current].classList.add('active');
  }

  document.getElementById('sliderPrev').addEventListener('click', () => showSlide(current - 1));
  document.getElementById('sliderNext').addEventListener('click', () => showSlide(current + 1));
  setInterval(() => showSlide(current + 1), 4500);

  // ===== Trek Detail Tabs =====
  const trekBtns = document.querySelectorAll('.trek-tab-btn');
  const trekPanels = document.querySelectorAll('.trek-tab-panel');

  trekBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      trekBtns.forEach(b => b.classList.remove('active'));
      trekPanels.forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      const panel = document.getElementById('trek-' + btn.dataset.trek);
      if (panel) panel.classList.add('active');
    });
  });

});
</script>
</body>
</html>