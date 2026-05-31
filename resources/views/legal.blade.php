<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Legal Notice – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>
<body>
@include('partials.navbar')

<section class="page-hero" style="position:relative; width:100%; height:240px; overflow:hidden;">
  <div class="page-hero-image" style="background-image:url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&fit=crop&w=1600&q=80'); background-size:cover; background-position:center 55%; height:100%;"></div>
  <div class="page-hero-overlay" style="position:absolute; inset:0; background:rgba(0,0,0,0.18);"></div>
  <div style="position:absolute; inset:0; display:flex; align-items:center; justify-content:center; color:#fff; z-index:2;">
    <h1 style="font-family:'PT Sans Narrow',sans-serif; font-size:2rem; font-weight:700; text-transform:uppercase; letter-spacing:1px;">Legal Notice</h1>
  </div>
</section>

<section style="background:#f5f5f5; padding:50px 0;">
  <div class="container" style="max-width:1100px; margin:0 auto; padding:0 20px;">
    <h2 style="font-family:'PT Sans Narrow',sans-serif; font-size:1.8rem; color:#1b2a4a; margin-bottom:20px;">Legal Information</h2>
    <p style="font-family:'Lato',sans-serif; font-size:0.95rem; line-height:1.85; color:#444; margin-bottom:18px;">
      Celtic Trekking Adventure (P.) Ltd.<br>
      GPO Box 11661, 7 Corner Street, Thamel<br>
      Kathmandu, Nepal.
    </p>
    <p style="font-family:'Lato',sans-serif; font-size:0.95rem; line-height:1.85; color:#444; margin-bottom:18px;">
      Email: <a href="mailto:contact@celtictrekking.com" style="color:#3a6fd8; text-decoration:none;">contact@celtictrekking.com</a><br>
      Téléphone: +977-1-4701205
    </p>
    <h3 style="font-family:'PT Sans Narrow',sans-serif; font-size:1.3rem; color:#1b2a4a; margin-bottom:14px;">Privacy Policy</h3>
    <p style="font-family:'Lato',sans-serif; font-size:0.95rem; line-height:1.85; color:#444; margin-bottom:18px;">
      Nous respectons votre vie privée. Les informations récupérées via ce formulaire sont utilisées uniquement pour répondre à votre demande.
    </p>
    <p style="font-family:'Lato',sans-serif; font-size:0.95rem; line-height:1.85; color:#444;">
      By browsing this site, you agree to the terms of use and the associated privacy policy.
    </p>
  </div>
</section>

@include('partials.footer')
</body>
</html>
