<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contactez-nous – Celtic Trekking</title>
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

  /* ===== HERO ===== */
  .page-hero {
    position: relative;
    width: 100%;
    height: 300px;
    overflow: hidden;
  }

  .page-hero-image {
    width: 100%;
    height: 100%;
    background-image: url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center 45%;
  }

  .page-hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.18);
  }

  .page-hero-badge {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #3a6fd8;
    color: #fff;
    font-family: 'Lato', sans-serif;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 12px 32px;
    z-index: 2;
    white-space: nowrap;
  }

  /* ===== CONTACT SECTION ===== */
  .contact-section {
    background-color: #e8e8e8;
    padding: 50px 0 60px;
  }

  .contact-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: start;
  }

  /* ===== LEFT: Info ===== */
  .contact-info h1 {
    font-family: 'PT Sans Narrow', sans-serif;
    font-size: 1.7rem;
    font-weight: 400;
    color: #1b2a4a;
    margin-bottom: 24px;
  }

  .contact-info h2 {
    font-family: 'Lato', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    color: #3a6fd8;
    margin-bottom: 10px;
  }

  .contact-info address {
    font-style: normal;
    font-size: 0.9rem;
    color: #444;
    line-height: 1.8;
    margin-bottom: 22px;
  }

  .contact-info .call-note {
    font-size: 0.9rem;
    font-weight: 700;
    color: #3a6fd8;
    margin-bottom: 6px;
  }

  .contact-info .call-sub {
    font-size: 0.88rem;
    color: #555;
    margin-bottom: 18px;
  }

  .contact-info .contact-details {
    font-size: 0.88rem;
    color: #444;
    line-height: 2;
  }

  .contact-info .contact-details a {
    color: #3a6fd8;
    text-decoration: none;
  }

  .contact-info .contact-details a:hover {
    text-decoration: underline;
  }

  /* ===== RIGHT: Form ===== */
  .contact-form {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px 28px;
    align-items: start;
  }

  .form-group {
    display: flex;
    flex-direction: column;
    gap: 7px;
  }

  .form-group.full-width {
    grid-column: 1 / -1;
  }

  .form-group label {
    font-family: 'Lato', sans-serif;
    font-size: 0.84rem;
    color: #333;
  }

  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group input[type="number"],
  .form-group select,
  .form-group textarea {
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    color: #333;
    background: #fff;
    border: 1px solid #ccc;
    padding: 10px 12px;
    border-radius: 1px;
    width: 100%;
    outline: none;
    transition: border-color 0.2s;
  }

  .form-group input[type="text"]:focus,
  .form-group input[type="email"]:focus,
  .form-group input[type="number"]:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    border-color: #3a6fd8;
  }

  .form-group input::placeholder,
  .form-group textarea::placeholder {
    color: #aaa;
  }

  .form-group select {
    appearance: none;
    -webkit-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%23555' d='M6 8L0 0h12z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    padding-right: 32px;
    cursor: pointer;
  }

  .form-group input[type="number"] {
    width: 160px;
  }

  .form-group textarea {
    resize: vertical;
    min-height: 200px;
  }

  /* Checkbox row */
  .form-group.checkbox-group {
    grid-column: 1 / -1;
    flex-direction: column;
    gap: 10px;
  }

  .checkbox-group .gdpr-text {
    font-size: 0.83rem;
    color: #444;
    line-height: 1.65;
  }

  .checkbox-group .gdpr-text a {
    color: #3a6fd8;
    text-decoration: none;
  }

  .checkbox-group .gdpr-text a:hover { text-decoration: underline; }

  .checkbox-row {
    display: flex;
    align-items: center;
    gap: 10px;
  }

  .checkbox-row input[type="checkbox"] {
    width: 16px;
    height: 16px;
    cursor: pointer;
    accent-color: #3a6fd8;
    flex-shrink: 0;
  }

  /* Submit button */
  .form-group.submit-group {
    grid-column: 1 / -1;
  }

  .btn-submit {
    display: block;
    width: 100%;
    padding: 14px 20px;
    background-color: #2a2a2a;
    color: #fff;
    font-family: 'Lato', sans-serif;
    font-size: 0.88rem;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border: none;
    cursor: pointer;
    border-radius: 1px;
    transition: background-color 0.2s;
  }

  .btn-submit:hover { background-color: #111; }

  /* ===== SUCCESS MESSAGE ===== */
  .form-success {
    display: none;
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
    padding: 14px 18px;
    border-radius: 2px;
    font-size: 0.9rem;
    grid-column: 1 / -1;
    margin-top: 4px;
  }

  /* ===== SHARE BANNER ===== */
  .share-banner {
    background-color: #1d3d8c;
    padding: 32px 0;
    text-align: center;
  }

  .share-banner p {
    font-family: 'Lato', sans-serif;
    font-size: 1.05rem;
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
  @media (max-width: 900px) {
    .contact-inner { grid-template-columns: 1fr; gap: 36px; }
    .contact-form { grid-template-columns: 1fr; }
    .footer-grid { grid-template-columns: repeat(2, 1fr); }
    .page-hero { height: 200px; }
  }

  @media (max-width: 600px) {
    .nav-links { display: none; }
    .footer-grid { grid-template-columns: 1fr; }
    .page-hero { height: 160px; }
    .form-group input[type="number"] { width: 100%; }
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
      <li><a href="{{ route('trekking') }}">Trekking</a></li>
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
  <div class="page-hero-badge">À propos de Celtic Trekking</div>
</section>

{{-- ===== CONTACT SECTION ===== --}}
<section class="contact-section">
  <div class="contact-inner">

    {{-- Left: Contact Info --}}
    <div class="contact-info">
      <h1>Contacter l'agence Celtic Trekking</h1>

      <h2>Celtic Trekking Adventure (P.) Ltd.</h2>
      <address>
        GPO Box: 11661, 7 Corner Street, Thamel<br>
        Kathmandu, Nepal.
      </address>

      <p class="call-note">N'hésitez pas à nous appeler si vous souhaitez une information</p>
      <p class="call-sub">ou si vous ne trouvez pas les bureaux :</p>

      <div class="contact-details">
        <p><strong>Uddhav :</strong> 9841 78 67 78 &nbsp;–&nbsp; <strong>Krishna Raj :</strong> 9841 41 31 67</p>
        <p><strong>Téléphone :</strong> <a href="tel:+977-1-4701205">+977-1-4701205</a></p>
        <p><strong>Email :</strong> <a href="mailto:contact@celtictrekking.com">contact@celtictrekking.com</a></p>
      </div>
    </div>

    {{-- Right: Contact Form --}}
    <form
      action="{{ route('contact.send') }}"
      method="POST"
      class="contact-form"
      id="contactForm"
      novalidate
    >
      @csrf

      {{-- Success message --}}
      @if(session('success'))
      <div class="form-success" style="display:block;">
        {{ session('success') }}
      </div>
      @endif

      {{-- Validation errors --}}
      @if($errors->any())
      <div class="form-success" style="display:block; background:#f8d7da; color:#721c24; border-color:#f5c6cb;">
        <ul style="padding-left:16px;">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      {{-- Row 1: Name | Destination --}}
      <div class="form-group">
        <label for="name">Nom et prénom (obligatoire)</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Votre nom, votre prénom"
          value="{{ old('name') }}"
          required
        >
      </div>

      <div class="form-group">
        <label for="destination">Demande d'informations pour :</label>
        <select id="destination" name="destination">
          <option value="NEPAL"    {{ old('destination','NEPAL') == 'NEPAL'    ? 'selected' : '' }}>NEPAL</option>
          <option value="TIBET"    {{ old('destination') == 'TIBET'    ? 'selected' : '' }}>TIBET</option>
          <option value="ROUMANIE" {{ old('destination') == 'ROUMANIE' ? 'selected' : '' }}>ROUMANIE</option>
          <option value="AUTRE"    {{ old('destination') == 'AUTRE'    ? 'selected' : '' }}>AUTRE</option>
        </select>
      </div>

      {{-- Row 2: Email | Message (spans 2 rows) --}}
      <div class="form-group">
        <label for="email">Adresse email (obligatoire)</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="exemple@mail.com"
          value="{{ old('email') }}"
          required
        >
      </div>

      <div class="form-group" style="grid-row: span 2;">
        <label for="message">Votre message</label>
        <textarea
          id="message"
          name="message"
          placeholder="Écrivez-nous ici"
          style="min-height:220px;"
        >{{ old('message') }}</textarea>
      </div>

      {{-- Row 3: Persons --}}
      <div class="form-group">
        <label for="persons">Nombre de personne</label>
        <input
          type="number"
          id="persons"
          name="persons"
          value="{{ old('persons', 1) }}"
          min="1"
          max="20"
        >
      </div>

      {{-- GDPR Checkbox --}}
      <div class="form-group checkbox-group">
        <p class="gdpr-text">
          (OBLIGATOIRE / CASE A COCHER) En complétant ce formulaire, vous acceptez pleinement nos
          <a href="{{ route('legal') }}">conditions générales d'utilisation ainsi que notre politique de confidentialité.</a>
        </p>
        <div class="checkbox-row">
          <input
            type="checkbox"
            id="gdpr"
            name="gdpr"
            value="1"
            {{ old('gdpr') ? 'checked' : '' }}
            required
          >
          <label for="gdpr" style="font-size:0.83rem; color:#444; cursor:pointer;">
            J'accepte les conditions générales d'utilisation
          </label>
        </div>
      </div>

      {{-- Submit --}}
      <div class="form-group submit-group">
        <button type="submit" class="btn-submit">Envoyer</button>
      </div>

    </form>

  </div>
</section>

{{-- ===== SHARE BANNER ===== --}}
<section class="share-banner">
  <p>Partagez votre aventure avec vos proches</p>
  <div class="share-icons">
    <a href="#" title="Facebook"><i class="fa fa-heart"></i></a>
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

</body>
</html>