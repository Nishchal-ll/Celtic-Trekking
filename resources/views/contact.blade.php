<!DOCTYPE html>
<html lang="en" translate="no">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <link rel="icon" type="image/x-icon" href="{{ asset('logo.png') }}">
  <title>Contact Us – Celtic Trekking</title>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
  <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>


@include('partials.navbar')

{{-- ===== HERO ===== --}}
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-badge">Contact Celtic Trekking</div>
</section>

{{-- ===== CONTACT SECTION ===== --}}
<section class="contact-section">
  <div class="contact-inner">

    {{-- Left: Contact Info Card --}}
    <div class="contact-info">
      <h1>Contact Celtic Trekking</h1>
      <div class="title-accent-line"></div>

      <div class="info-card">
        <h2>{{ $settings['site_name'] ?? 'Celtic Trekking Adventure (P.) Ltd.' }}</h2>
        <address>
          <i class="fa fa-map-marker"></i>
          <span>{{ $settings['address'] ?? 'GPO Box: 11661, 7 Corner Street, Thamel' }}<br>{{ $settings['address_line_2'] ?? 'Kathmandu, Nepal.' }}</span>
        </address>

        <div class="call-box">
          <p class="call-note"><i class="fa fa-phone"></i> Please call us if you need information</p>
          <p class="staff-phones">
            @if(!empty($settings['uddhav_phone']))
                <strong>Uddhav :</strong> {{ $settings['uddhav_phone'] }}
            @endif
            @if(!empty($settings['uddhav_phone']) && !empty($settings['krishna_phone']))
                <span class="phone-pipe">|</span>
            @endif
            @if(!empty($settings['krishna_phone']))
                <strong>Krishna Raj :</strong> {{ $settings['krishna_phone'] }}
            @endif
          </p>
        </div>

        <div class="contact-details">
          <p>
            <i class="fa fa-phone-square"></i>
            <span><strong>Telephone :</strong> <a href="tel:{{ $settings['phone'] ?? '+977-1-4701205' }}">{{ $settings['phone'] ?? '+977-1-4701205' }}</a></span>
          </p>
          <p>
            <i class="fa fa-envelope"></i>
            <span><strong>Email :</strong> <a href="mailto:{{ $settings['email'] ?? 'contact@celtictrekking.com' }}">{{ $settings['email'] ?? 'contact@celtictrekking.com' }}</a></span>
          </p>
        </div>
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
        <div class="form-success">
          <i class="fa fa-check-circle"></i> {{ session('success') }}
        </div>
      @endif

      {{-- Validation errors --}}
      @if($errors->any())
        <div class="form-errors">
          <div class="errors-title"><i class="fa fa-exclamation-triangle"></i> Please check the missing fields:</div>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      {{-- Grid Row Components --}}
      <div class="form-group">
        <label for="name">Full name (required)</label>
        <input
          type="text"
          id="name"
          name="name"
          placeholder="Your first and last name"
          value="{{ old('name') }}"
          required
        >
      </div>

      <div class="form-group">
        <label for="destination_id">Request information for:</label>
        <div class="select-wrapper">
          <select id="destination_id" name="destination_id">
            <option value="">Select a destination</option>
            @foreach($destinations as $destination)
              <option value="{{ $destination->id }}" {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
                {{ $destination->name }}
              </option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email address (required)</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="example@mail.com"
          value="{{ old('email') }}"
          required
        >
      </div>

      <div class="form-group textarea-group">
        <label for="message">Your message</label>
        <textarea
          id="message"
          name="message"
          placeholder="Write your message here..."
        >{{ old('message') }}</textarea>
      </div>

      <div class="form-group">
        <label for="persons">Number of people</label>
        <input
          type="number"
          id="persons"
          name="persons"
          value="{{ old('persons', 1) }}"
          min="1"
          max="20"
        >
      </div>

      {{-- GDPR Checkbox Box --}}
      <div class="form-group checkbox-group">
        <div class="checkbox-row">
          <input
            type="checkbox"
            id="gdpr"
            name="gdpr"
            value="1"
            {{ old('gdpr') ? 'checked' : '' }}
            required
          >
          <label for="gdpr">
            I accept the terms of use and privacy policy
          </label>
        </div>
        <p class="gdpr-text">
          By checking this option, you fully accept our 
          <a href="{{ route('legal') }}">terms of use and privacy policy</a> regarding dynamic data management protocols.
        </p>
      </div>

      {{-- Submit Layout Line --}}
      <div class="form-group submit-group">
        <button type="submit" class="btn-submit">Send Message</button>
      </div>

    </form>

  </div>
</section>

{{-- ===== SHARE BANNER ===== --}}
<section class="share-banner">
  <p>Share your adventure with friends</p>
  <div class="share-icons">
    <a href="{{ $settings['facebook_url'] ?? 'https://www.facebook.com' }}" title="Facebook" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
    <span class="divider"></span>
    <a href="{{ $settings['instagram_url'] ?? 'https://www.instagram.com' }}" title="Instagram" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
    <span class="divider"></span>
    <a href="{{ $settings['twitter_url'] ?? 'https://www.twitter.com' }}" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
  </div>
</section>

@include('partials.footer')

</body>
</html>