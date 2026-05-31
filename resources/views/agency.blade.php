<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>L'Agence Celtic – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'Lato', sans-serif;
    background: #f5f5f5;
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
    width: 100%;
    height: 280px;
    overflow: hidden;
    position: relative;
  }

  .page-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center 40%;
  }

  .page-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.18);
  }

  /* ===== MAIN LAYOUT ===== */
  .page-body {
    background-color: #f5f5f5;
    padding: 50px 0 60px;
  }

  .page-layout {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px 60px;
    align-items: start;
  }

  /* ===== LEFT COLUMN ===== */
  .col-left {}

  .section-title {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.75rem;
    font-weight: 400;
    color: #1b2a4a;
    margin-bottom: 24px;
  }

  .agency-text {
    font-family: 'Lato', sans-serif;
    font-size: 0.92rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 18px;
  }

  .agency-text strong {
    font-weight: 700;
    color: #222;
  }

  .agency-text a,
  .agency-text .highlight {
    font-weight: 700;
    color: #1b2a4a;
  }

  /* Info box */
  .info-box {
    background-color: #1d3d8c;
    border-radius: 2px;
    padding: 30px 32px 36px;
    margin-top: 10px;
  }

  .info-box h3 {
    font-family: 'Lato', sans-serif;
    font-size: 1.05rem;
    font-weight: 700;
    color: #fff;
    margin-bottom: 16px;
  }

  .info-box p {
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    color: rgba(255,255,255,0.85);
    line-height: 1.8;
    margin-bottom: 6px;
  }

  .info-box .call-label {
    font-weight: 700;
    color: #fff;
    margin-top: 14px;
    margin-bottom: 4px;
  }

  .info-box .divider {
    border: none;
    border-top: 1px solid rgba(255,255,255,0.2);
    margin: 20px 0;
  }

  .btn-conditions {
    display: inline-block;
    padding: 12px 22px;
    background-color: transparent;
    color: #e8c040;
    border: 2px solid #e8c040;
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border-radius: 2px;
    transition: background-color 0.3s, color 0.3s;
  }

  .btn-conditions:hover {
    background-color: #e8c040;
    color: #1d3d8c;
  }

  .trek-links {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .btn-trek {
    display: inline-block;
    padding: 11px 20px;
    background-color: #2e4e8a;
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border-radius: 2px;
    transition: background-color 0.3s;
    width: fit-content;
  }

  .btn-trek:hover { background-color: #3a6fd8; color: #fff; }

  .social-icons {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 28px;
    color: rgba(255,255,255,0.7);
    font-size: 1rem;
  }

  .social-icons span.div {
    display: inline-block;
    width: 1px;
    height: 24px;
    background: rgba(255,255,255,0.3);
  }

  /* ===== RIGHT COLUMN ===== */
  .col-right {}

  /* Image slider */
  .agency-slider {
    position: relative;
    width: 100%;
    border-radius: 2px;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .agency-slider-track {
    display: flex;
    transition: transform 0.5s ease;
  }

  .agency-slide {
    flex: 0 0 100%;
    height: 280px;
    background-size: cover;
    background-position: center;
  }

  .agency-slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(255,255,255,0.8);
    border: none;
    width: 36px; height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: #333;
    font-size: 0.9rem;
    transition: background-color 0.2s;
    z-index: 5;
  }

  .agency-slider-arrow:hover { background-color: #fff; }
  .agency-slider-prev { left: 0; }
  .agency-slider-next { right: 0; }

  .btn-contact-agency {
    display: inline-block;
    padding: 13px 28px;
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
    margin-bottom: 40px;
  }

  .btn-contact-agency:hover { background-color: #2b5cb3; }

  /* Ethics section */
  .ethics-title {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: #1b2a4a;
    margin-bottom: 20px;
  }

  .ethics-text {
    font-family: 'Lato', sans-serif;
    font-size: 0.9rem;
    line-height: 1.85;
    color: #444;
    margin-bottom: 18px;
    text-align: justify;
  }

  .ethics-text a,
  .ethics-text .hl {
    font-weight: 700;
    color: #1d3d8c;
    text-decoration: none;
  }

  .ethics-text .hl-bold {
    font-weight: 700;
    color: #222;
  }

  .ethics-text .closing {
    font-weight: 700;
    color: #1d3d8c;
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
    .page-layout { grid-template-columns: 1fr; gap: 30px; }
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 600px) {
    .nav-links { display: none; }
    .footer-grid { grid-template-columns: 1fr; }
    .page-hero { height: 180px; }
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
      <li><a href="#">Départs Fixes</a></li>
      <li><a href="#" class="active">L'Agence Celtic</a></li>
      <li><a href="celtic-trekking-temoignage.html">Témoignage</a></li>
    </ul>
  </div>
</nav>

<!-- ===== HERO BANNER ===== -->
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
</section>

<!-- ===== MAIN CONTENT ===== -->
<div class="page-body">
  <div class="page-layout">

    <!-- ===== LEFT COLUMN ===== -->
    <div class="col-left">

      <h1 class="section-title">L'agence Celtic Trekking</h1>

      <p class="agency-text">
        <strong>Notre belle aventure a démarré en 1992</strong> quand Olivier Kerviel a épousé Sarita et s'est installé au Népal. C'est là que l'agence Celtic Trekking est née. Y avait-il une meilleure place que le Népal pour se lancer dans les treks et la randonnée ? Notre équipe s'est agrandie au fil des années et aujourd'hui nous sommes une vingtaine de personnes à donner le meilleur de nous-mêmes pour vous conseiller et vous accompagner dans <span class="highlight">les plus belles randonnées qui existent sur le toit du monde.</span>
      </p>

      <p class="agency-text">
        Après 20 ans au service de <strong>Celtic Trekking</strong>, Olivier Kerviel a passé la main à Uddhav Pokharel et Krishna Raj Giri, deux népalais francophones.
      </p>

      <!-- Info box -->
      <div class="info-box">
        <h3>Celtic Trekking Adventure (P.) Ltd.</h3>
        <p>GPO Box: 11661, 7 Corner Street, Thamel</p>
        <p>Kathmandu, Nepal.</p>

        <p class="call-label">N'hésitez pas à nous appeler si vous souhaitez une information<br>ou si vous ne trouvez pas les bureaux :</p>
        <p>Uddhav : 9841 78 67 78 – Krishna Raj : 9841 41 31 67</p>
        <p>Téléphone : +977-1-4701205</p>
        <p>Email : contact[at]celtictrekking.com</p>

        <hr class="divider">

        <a href="#" class="btn-conditions">Consulter les Conditions Générales</a>

        <hr class="divider">

        <div class="trek-links">
          <a href="#" class="btn-trek">Nos Trekking au Tibet</a>
          <a href="#" class="btn-trek">Nos Trekking au Népal</a>
          <a href="#" class="btn-trek">Nos Trekking au Maroc</a>
          <a href="#" class="btn-trek">Nos Trekking en Roumanie</a>
        </div>

        <div class="social-icons">
          <i class="fa fa-heart"></i>
          <span class="div"></span>
          <i class="fa fa-heart"></i>
          <span class="div"></span>
          <i class="fa fa-heart"></i>
        </div>
      </div>

    </div>

    <!-- ===== RIGHT COLUMN ===== -->
    <div class="col-right">

      <!-- Image slider -->
      <div class="agency-slider">
        <div class="agency-slider-track" id="agencyTrack">
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1469521669194-babb45599def?auto=format&fit=crop&w=900&q=80');"></div>
          <div class="agency-slide" style="background-image: url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=900&q=80');"></div>
        </div>
        <button class="agency-slider-arrow agency-slider-prev" id="agencyPrev">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="agency-slider-arrow agency-slider-next" id="agencyNext">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>

      <a href="#" class="btn-contact-agency">Contacter l'Agence Celtic Trekking</a>

      <!-- Ethics section -->
      <h2 class="ethics-title">Notre savoir faire et notre éthique</h2>

      <p class="ethics-text">
        Sur toutes les destinations et treks que nous proposons, nous nous appuyons sur <a href="#" class="hl">des équipes locales compétentes et professionnelles</a> que nous rétribuons de façon saine et généreuse. <a href="#" class="hl">Tous nos guides sont diplômés d'état et suivent régulièrement des cessions de perfectionnement</a> (alpinisme, premiers secours, etc.). Tous parlent une ou deux langues étrangères, parfois plus…
      </p>

      <p class="ethics-text">
        Ils possèdent bien sûr une parfaite connaissance du terrain qui nous permet de vous faire voyager en toute sécurité et en vous faisant découvrir tous les attraits des régions que vous traversez, toujours dans le respect de chacun. Le tourisme solidaire, équitable et durable est à la mode en ce moment !! Certains et certaines en écrivent des pages sur leurs brochures et sites internet, pourtant il en va tout autrement sur le terrain.
      </p>

      <p class="ethics-text">
        <span class="hl-bold">Au Népal,</span> cela fait une décennie que nos guides, porteurs et cuisiniers perçoivent des salaires bien plus élevés que la moyenne. Tout le personnel est assuré par une compagnie locale : NECO Insurance.
      </p>

      <p class="ethics-text">
        Nous veillons à ce que l'équipement des porteurs soit correct, même si bien sûr ils n'ont pas sur le dos les mêmes vêtements High Tech que les trekkeurs occidentaux.
      </p>

      <p class="ethics-text">
        <span class="hl-bold">Au Maroc,</span> contrairement à bons nombre d'agences, nos payons les salaires des guides, chamelier, muletiers et cuisiniers dès le début du trek. C'est donc l'esprit libre et le moral gonflé à bloc que ceux-ci donnent le meilleur d'eux-mêmes pendant votre randonnée. Il y a encore trop d'agences, et pas des moindres, qui payent les équipes accompagnatrices des semaines voire des mois après le trek. Parfois même jamais !!!!!! Pas de ça chez nous. Guides et muletiers pourront en témoigner.
      </p>

      <p class="ethics-text">
        Bref, nous vous proposons des treks équitables, à savoir des treks où tout le monde se retrouve : Vous, le trekkeur qui bénéficiez d'<span class="hl-bold">un tarif correct et des services de qualité</span>, les équipes accompagnatrices qui sont payées décemment avec des conditions de travail idéales, et les intervenants divers (hôtes, marchands, transporteurs, etc.) qui vendent leurs produits et leurs services au juste prix.
      </p>

      <p class="ethics-text">
        Depuis 1992, notre clientèle ne cesse d'augmenter et nous n'en sommes pas peu fiers. Nous savons bien qu'une petite structure comme la nôtre, qui <a href="#" class="hl">privilégie les relations humaines et les valeurs de l'être sur l'avoir</a>, répond aux aspirations d'une partie croissante de la « population voyageuse » qui souhaite rompre avec les logiques de la société de consommation.
      </p>

      <p class="ethics-text">
        <span class="closing">Voyager certes, mais voyager de façon intelligente en faisant confiance à ceux et celles qui vous feront découvrir dans le respect et dans l'échange. Venez le faire avec nous.</span>
      </p>

    </div>

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