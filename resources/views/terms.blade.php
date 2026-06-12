<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Terms and Conditions - Celtic Trekking</title>
  
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/terms.css') }}">
</head>
<body>

@include('partials.navbar')

<section class="terms-hero-banner" style="background-image: url('https://images.unsplash.com/photo-1544735716-392fe2489ffa?auto=format&fit=crop&w=1600&q=80');">
  <div class="terms-hero-overlay"></div>
  <div class="terms-hero-content">
    <a href="#" class="btn-terms-hero">About Celtic Trekking</a>
  </div>
</section>

<main class="terms-main-container">
  <div class="terms-grid-layout">
    
    <div class="terms-left-heading-col">
      <h1 class="terms-main-title">TERMS &amp; CONDITIONS</h1>
      <h2 class="terms-sub-title">CELTIC TREKKING</h2>
    </div>

    <div class="terms-right-content-col">
      
      <div class="terms-tab-navigation-row">
        <button class="terms-tab-btn active" data-target="rates">RATES</button>
        <button class="terms-tab-btn" data-target="bookings">BOOKINGS</button>
        <button class="terms-tab-btn" data-target="insurance">INSURANCE</button>
      </div>

      <div class="terms-tab-pane active" id="rates">
        <div class="rich-text-content">
          {!! $terms?->rates ?? '<p>No rates terms defined yet.</p>' !!}
        </div>
      </div>

      <div class="terms-tab-pane" id="bookings">
        <div class="rich-text-content">
          {!! $terms?->bookings ?? '<p>No booking terms defined yet.</p>' !!}
        </div>
      </div>

      <div class="terms-tab-pane" id="insurance">
        <div class="rich-text-content">
          {!! $terms?->insurance ?? '<p>No insurance terms defined yet.</p>' !!}
        </div>
      </div>

    </div>

  </div>
</main>

<section class="terms-cta-bar">
  <div class="container">
    <p class="terms-cta-text">Share your adventure with your loved ones</p>
  </div>
</section>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function () {
  const tabs = document.querySelectorAll('.terms-tab-btn');
  const panes = document.querySelectorAll('.terms-tab-pane');

  tabs.forEach(tab => {
    tab.addEventListener('click', function () {
      tabs.forEach(t => t.classList.remove('active'));
      panes.forEach(p => p.classList.remove('active'));

      this.classList.add('active');
      const targetId = this.getAttribute('data-target');
      document.getElementById(targetId).classList.add('active');
    });
  });
});
</script>
</body>
</html>