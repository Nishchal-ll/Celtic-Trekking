<!DOCTYPE html>
<html lang="en" translate="no">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google" content="notranslate">
<title>Contact Us – Celtic Trekking</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/layout.css') }}">
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>

{{-- ===== NAVBAR ===== --}}
@include('partials.navbar')

{{-- ===== HERO ===== --}}
<section class="page-hero">
  <div class="page-hero-image"></div>
  <div class="page-hero-overlay"></div>
  <div class="page-hero-badge">About Celtic Trekking</div>
</section>

{{-- ===== CONTACT SECTION ===== --}}
<section class="contact-section">
  <div class="contact-inner">

    {{-- Left: Contact Info --}}
    <div class="contact-info">
      <h1>Contact Celtic Trekking</h1>

      <h2>Celtic Trekking Adventure (P.) Ltd.</h2>
      <address>
        GPO Box: 11661, 7 Corner Street, Thamel<br>
        Kathmandu, Nepal.
      </address>

      <p class="call-note">Please call us if you need information</p>

      <div class="contact-details">
        <p><strong>Uddhav :</strong> 9841 78 67 78 &nbsp;–&nbsp; <strong>Krishna Raj :</strong> 9841 41 31 67</p>
        <p><strong>Telephone :</strong> <a href="tel:+977-1-4701205">+977-1-4701205</a></p>
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
        <select id="destination_id" name="destination_id">
          <option value="">Select a destination</option>
          @foreach($destinations as $destination)
            <option value="{{ $destination->id }}" {{ old('destination_id') == $destination->id ? 'selected' : '' }}>
              {{ $destination->name }}
            </option>
          @endforeach
        </select>
      </div>

      {{-- Row 2: Email | Message (spans 2 rows) --}}
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

      <div class="form-group" style="grid-row: span 2;">
        <label for="message">Your message</label>
        <textarea
          id="message"
          name="message"
          placeholder="Écrivez-nous ici"
          style="min-height:220px;"
        >{{ old('message') }}</textarea>
      </div>

      {{-- Row 3: Persons --}}
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

      {{-- GDPR Checkbox --}}
      <div class="form-group checkbox-group">
        <p class="gdpr-text">
          (REQUIRED / CHECKBOX) By submitting this form, you fully accept our
          <a href="{{ route('legal') }}">terms of use and our privacy policy.</a>
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
            I accept the terms of use
          </label>
        </div>
      </div>

      {{-- Submit --}}
      <div class="form-group submit-group">
        <button type="submit" class="btn-submit">Send</button>
      </div>

    </form>

  </div>
</section>

{{-- ===== SHARE BANNER ===== --}}
<section class="share-banner">
  <p>Share your adventure with friends</p>
  <div class="share-icons">
    <a href="#" title="Facebook"><i class="fa fa-heart"></i></a>
    <span class="divider"></span>
    <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
    <span class="divider"></span>
    <a href="#" title="Pinterest"><i class="fa fa-pinterest"></i></a>
  </div>
</section>

@include('partials.footer')

</body>
</html>