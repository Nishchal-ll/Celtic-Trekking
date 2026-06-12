<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Legal Notice – Celtic Trekking</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/legal.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="hero-content">
    <h1 class="hero-title">Legal Notice</h1>
    <div class="title-accent-line"></div>
  </div>
</section>

<section class="legal-content-section">
  <div class="container-inner">
    <div class="legal-card">
      
      <div class="legal-block">
        <h2 class="block-title"><i class="fa fa-info-circle"></i> Corporate Identification</h2>
        <p class="legal-text font-bold">Celtic Trekking Adventure (P.) Ltd.</p>
        <address class="legal-address">
          GPO Box 11661, 7 Corner Street, Thamel<br>
          Kathmandu, Nepal.
        </address>
        <div class="legal-meta-links">
          <p><strong>Email:</strong> <a href="mailto:contact@celtictrekking.com">contact@celtictrekking.com</a></p>
          <p><strong>Telephone:</strong> <a href="tel:+97714701205">+977-1-4701205</a></p>
        </div>
      </div>

      <hr class="legal-divider">

      <div class="legal-block">
        <h3 class="block-subtitle"><i class="fa fa-shield"></i> Privacy Policy & Data Collection</h3>
        <p class="legal-text">
          We highly respect your digital privacy. Any personal information submitted or retrieved via our contact forms is handled securely and utilized strictly to fulfill, answer, or process your active itinerary request. We never sell, lease, or distribute your private information to third-party marketing brokers.
        </p>
        <div class="legal-notice-box">
          <i class="fa fa-check-square-o"></i>
          <p class="legal-text">
            By browsing this website, you explicitly understand and fully agree to all our structural terms of use and the associated data management privacy policies.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

@include('partials.footer')

</body>
</html>