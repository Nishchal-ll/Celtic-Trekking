<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Départs Fixes – Celtic Trekking</title>
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
    height: 240px;
    overflow: hidden;
  }

  .page-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center 55%;
  }

  .page-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.15);
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
    50% { transform: translateX(-50%) translateY(6px); }
  }

  /* ===== CONTENT AREA ===== */
  .page-content {
    background-color: #f5f5f5;
    padding: 40px 0 60px;
  }

  .content-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .page-heading {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.8rem;
    font-weight: 400;
    color: #1b2a4a;
    margin-bottom: 8px;
  }

  .page-subtext {
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    color: #555;
    margin-bottom: 24px;
  }

  /* ===== COUNTRY TABS ===== */
  .tab-bar {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 2px;
    overflow: hidden;
    width: fit-content;
    margin-bottom: 30px;
  }

  .tab-btn {
    padding: 10px 28px;
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    background-color: #fff;
    color: #555;
    border-right: 1px solid #ccc;
    transition: background-color 0.2s, color 0.2s;
  }

  .tab-btn:last-child { border-right: none; }

  .tab-btn:hover { background-color: #eee; }

  .tab-btn.active {
    background-color: #3a6fd8;
    color: #fff;
  }

  /* ===== DEPARTURES TABLE ===== */
  .tab-panel { display: none; }
  .tab-panel.active { display: block; }

  .departures-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
  }

  .departures-table thead tr {
    background-color: #2a4a70;
  }

  .departures-table thead th {
    font-family: 'Lato', sans-serif;
    font-size: 0.82rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #fff;
    padding: 14px 18px;
    text-align: left;
  }

  .departures-table thead th:nth-child(2) { width: 220px; }
  .departures-table thead th:nth-child(3) { width: 140px; }

  /* Circuit name row */
  .departures-table .row-circuit td {
    padding: 14px 18px 8px;
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    font-weight: 700;
    color: #1b2a4a;
    border-bottom: 1px solid #e0e0e0;
  }

  /* Date sub-rows */
  .departures-table .row-date td {
    padding: 8px 18px;
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    color: #444;
    border-bottom: 1px solid #e8e8e8;
  }

  .departures-table .row-date td:first-child { color: transparent; } /* empty circuit name cell */

  /* Spacer row between circuit groups */
  .departures-table .row-spacer td {
    height: 14px;
    border-bottom: 1px solid #ddd;
    background-color: #f9f9f9;
    padding: 0;
  }

  /* Status badges */
  .status-badge {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 2px;
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .status-confirmed { background-color: #d4edda; color: #155724; }
  .status-open      { background-color: #cce5ff; color: #004085; }
  .status-full      { background-color: #f8d7da; color: #721c24; }

  /* Footnote */
  .footnote {
    margin-top: 28px;
    font-family: 'Lato', sans-serif;
    font-size: 0.84rem;
    color: #555;
    line-height: 1.7;
  }

  /* ===== TESTIMONIAL PANEL (from homepage) ===== */
  .testimonials-section {
    background-color: #1d3d8c;
    padding: 50px 0;
  }

  .testimonials-inner {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .testimonial-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
    min-width: 200px;
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

  .testimonial-slides-wrap { position: relative; min-height: 90px; }

  .t-slide { display: none; }
  .t-slide.active { display: block; }

  .t-quote {
    font-family: 'Lato', sans-serif;
    font-size: 1.25rem;
    line-height: 1.65;
    color: #fff;
    font-weight: 700;
    margin-bottom: 12px;
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

  .t-dots {
    display: flex;
    justify-content: center;
    gap: 8px;
  }

  .t-dot {
    width: 11px; height: 11px;
    border-radius: 50%;
    background-color: transparent;
    border: 2px solid rgba(255,255,255,0.6);
    cursor: pointer;
    padding: 0;
    transition: all 0.3s;
  }

  .t-dot.active { background-color: #fff; border-color: #fff; }

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
  @media (max-width: 900px) {
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
    .testimonials-inner { flex-direction: column; }
    .departures-table thead th:nth-child(3) { display: none; }
    .departures-table .row-circuit td:nth-child(3),
    .departures-table .row-date td:nth-child(3) { display: none; }
  }

  @media (max-width: 600px) {
    .nav-links { display: none; }
    .footer-grid { grid-template-columns: 1fr; }
    .page-hero { height: 160px; }
    .departures-table thead th:nth-child(2) { width: auto; }
  }
</style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav>
  <div class="nav-inner">
    <a href="celtic-trekking.html" class="nav-logo">
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
      <li><a href="celtic-trekking.html">Accueil</a></li>
      <li><a href="#">Trekking</a></li>
      <li><a href="#" class="active">Départs Fixes</a></li>
      <li><a href="celtic-trekking-agence.html">L'Agence Celtic</a></li>
      <li><a href="celtic-trekking-temoignage.html">Témoignage</a></li>
    </ul>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="hero-scroll-hint"><i class="fa fa-chevron-down"></i></div>
</section>

<!-- ===== CONTENT ===== -->
<section class="page-content">
  <div class="content-inner">

    <h1 class="page-heading">Consulter nos départs fixes :</h1>
    <p class="page-subtext">Sélectionner ci-dessous le pays dont vous souhaitez consulter la liste des départs fixes.</p>

    <!-- Country Tabs -->
    <div class="tab-bar">
      <button class="tab-btn active" data-tab="nepal">Népal</button>
      <button class="tab-btn" data-tab="tibet">Tibet</button>
      <button class="tab-btn" data-tab="roumanie">Roumanie</button>
    </div>

    <!-- ===== NÉPAL TAB ===== -->
    <div class="tab-panel active" id="tab-nepal">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <!-- Langtang -->
          <tr class="row-circuit">
            <td>Langtang (8 jours )</td>
            <td>23 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>04 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Bas/Haut Dolpo -->
          <tr class="row-circuit">
            <td>Bas / Haut Dolpo ( 14 ou 24 jours ) chez l'habitant + sous tente</td>
            <td>27 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>18 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Tour du Manaslu -->
          <tr class="row-circuit">
            <td>Tour du Manaslu (15 ou 17 jours ) en lodge</td>
            <td>25 Septembre 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>11 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Royaume du Haut Mustang -->
          <tr class="row-circuit">
            <td>Royaume du Haut Mustang ( 17 jours ) en lodge</td>
            <td>28 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>05 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Everest / Gokyo -->
          <tr class="row-circuit">
            <td>Everest / Gokyo ( 18 jours ) en lodge</td>
            <td>04 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Everest Base Camp -->
          <tr class="row-circuit">
            <td>Everest Base Camp (15 jours) en lodge</td>
            <td>18 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>01 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Kanchenjunga -->
          <tr class="row-circuit">
            <td>Kanchenjunga ( 24 jours ) en lodge</td>
            <td>26 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>10 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Balcon des Annapurnas -->
          <tr class="row-circuit">
            <td>Balcon des Annapurnas (7 ou 9 jours ) en lodge</td>
            <td>21 Septembre 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>28 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>03 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>02 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- La Route du sel -->
          <tr class="row-circuit">
            <td>La Route du sel (16 jours ) en lodge</td>
            <td>06 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Langtang - Gosaikunda -->
          <tr class="row-circuit">
            <td>Langtang - Gosaikunda - Helambu ( 12- 14 jours ) en lodge</td>
            <td>29 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>11 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>19 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Tour des Annapurnas -->
          <tr class="row-circuit">
            <td>Tour des Annapurnas ( 15 ou 17 jours ) en lodge</td>
            <td>15 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>05 Novembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Mardi Himal -->
          <tr class="row-circuit">
            <td>Mardi Himal Base Camp ( 9 jours ) en lodge ( nouveauté )</td>
            <td>29 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>17 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Kanchenjunga - Makalu -->
          <tr class="row-circuit">
            <td>Kanchenjunga - Makalu ( 28 jours ) en lodge + sous tente ( nouveauté )</td>
            <td>03 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <!-- Haute route des Annapurnas -->
          <tr class="row-circuit">
            <td>Haute route des Annapurnas et Naar- Phu (21 jours) en lodge + sous tente ( nouveauté )</td>
            <td>08 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Népal :</strong> Toutes les dates indiquées ci-dessus correspondent à une date de départ de Kathmandu. Il faut donc prévoir d'arriver au plus tard la veille au matin.<br>
        Ces mêmes treks peuvent être organisés spécialement pour vous aux dates qui vous conviennent (à partir de 2-3 participants selon les treks ).
      </p>
    </div>

    <!-- ===== TIBET TAB ===== -->
    <div class="tab-panel" id="tab-tibet">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <tr class="row-circuit">
            <td>Tibet : Le tour du Kailash ( 22 jours )</td>
            <td>01 Mai 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>15 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Tibet : Lhassa et monastères ( 12 jours )</td>
            <td>10 Avril 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>20 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Tibet : Trek Ganden – Samye ( 10 jours )</td>
            <td>05 Octobre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Tibet :</strong> Les permis Tibet sont soumis à des restrictions gouvernementales. Nous vous conseillons de réserver au minimum 2 mois à l'avance.
      </p>
    </div>

    <!-- ===== ROUMANIE TAB ===== -->
    <div class="tab-panel" id="tab-roumanie">
      <table class="departures-table">
        <thead>
          <tr>
            <th>Circuits</th>
            <th>Dates</th>
            <th>Statut</th>
          </tr>
        </thead>
        <tbody>

          <tr class="row-circuit">
            <td>Roumanie : Transylvanie et Carpates ( 10 jours )</td>
            <td>12 Juillet 2025</td>
            <td><span class="status-badge status-confirmed">Confirmé</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>06 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Roumanie : Maramures et Delta du Danube ( 12 jours )</td>
            <td>19 Juillet 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-spacer"><td colspan="3"></td></tr>

          <tr class="row-circuit">
            <td>Roumanie : Les Carpates à cheval ( 8 jours )</td>
            <td>30 Août 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>
          <tr class="row-date">
            <td></td>
            <td>20 Septembre 2025</td>
            <td><span class="status-badge status-open">Ouvert</span></td>
          </tr>

        </tbody>
      </table>

      <p class="footnote">
        <strong>*Roumanie :</strong> Ces mêmes circuits peuvent être organisés spécialement pour vous aux dates qui vous conviennent (à partir de 2 participants).
      </p>
    </div>

  </div>
</section>

<!-- ===== TESTIMONIAL PANEL ===== -->
<section class="testimonials-section">
  <div class="testimonials-inner">
    <div class="testimonial-left">
      <div class="testimonial-icons">
        <i class="fa fa-heart"></i>
        <span></span>
        <i class="fa fa-heart"></i>
      </div>
      <a href="contact.html" class="btn-contact">Contactez-nous</a>
    </div>
    <div class="testimonial-right">
      <div class="testimonial-slides-wrap">
        <div class="t-slide active">
          <p class="t-quote">"Parfaitement organisé, nous avons ainsi profité au maximum de notre voyage!"</p>
          <cite class="t-author">– Georges &amp; Michele</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Des guides d'un grand professionnalisme et d'une attention de tous les instants."</p>
          <cite class="t-author">– Marie Jadis</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Un séjour fantastique, une organisation bien pensée, en toute discrétion."</p>
          <cite class="t-author">– Philippe Lemarechal</cite>
        </div>
        <div class="t-slide">
          <p class="t-quote">"Une expérience inoubliable, je recommande vivement Celtic Trekking à tous."</p>
          <cite class="t-author">– Sophie &amp; Laurent</cite>
        </div>
      </div>
      <div class="t-dots">
        <button class="t-dot active" data-t="0"></button>
        <button class="t-dot" data-t="1"></button>
        <button class="t-dot" data-t="2"></button>
        <button class="t-dot" data-t="3"></button>
      </div>
    </div>
  </div>
</section>

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

  // ===== Country Tabs =====
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

  // ===== Testimonial Slider =====
  const tSlides = document.querySelectorAll('.t-slide');
  const tDots   = document.querySelectorAll('.t-dot');
  let tCurrent  = 0;

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