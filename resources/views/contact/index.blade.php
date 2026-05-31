@extends('layouts.app')

@section('title', __('contact.meta_title'))

@section('content')
    <!-- Page Header -->
    <section class="page-header page-header-small">
        <div class="page-header-bg" style="background-image: url('{{ asset('images/contact-header.jpg') }}')"></div>
        <div class="page-header-overlay"></div>
        <div class="container">
            <h1 class="page-title">@lang('contact.title')</h1>
            <p class="page-subtitle">@lang('contact.subtitle')</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <h2 class="form-title">@lang('contact.form_title')</h2>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">@lang('contact.name') <span class="required">*</span></label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="form-input @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">@lang('contact.email') <span class="required">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="form-input @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="phone">@lang('contact.phone')</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="form-input @error('phone') is-invalid @enderror">
                                @error('phone')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="destination">@lang('contact.destination')</label>
                                <select id="destination" name="destination" class="form-select @error('destination') is-invalid @enderror">
                                    <option value="">@lang('contact.select_destination')</option>
                                    @foreach(\App\Models\Destination::orderBy('name')->get() as $destination)
                                        <option value="{{ $destination->name }}" {{ old('destination', request('destination')) === $destination->slug ? 'selected' : '' }}>
                                            {{ $destination->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">@lang('contact.subject') <span class="required">*</span></label>
                            <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required class="form-input @error('subject') is-invalid @enderror">
                            @error('subject')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">@lang('contact.message') <span class="required">*</span></label>
                            <textarea id="message" name="message" rows="6" required class="form-textarea @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">
                            @lang('contact.send_message')
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="contact-info-wrapper">
                    <div class="contact-info-card">
                        <h3 class="info-title">@lang('contact.info_title')</h3>

                        <div class="contact-info-item">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                    <circle cx="12" cy="10" r="3"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>@lang('contact.address')</h4>
                                <p>Celtic Trekking<br>Quimper, Bretagne<br>France</p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>@lang('contact.phone_label')</h4>
                                <p>
                                    <a href="tel:+33298000000">+33 (0)2 98 00 00 00</a><br>
                                    <small>@lang('contact.phone_hours')</small>
                                </p>
                            </div>
                        </div>

                        <div class="contact-info-item">
                            <div class="info-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </div>
                            <div class="info-content">
                                <h4>@lang('contact.email_label')</h4>
                                <p><a href="mailto:contact@celtictrekking.com">contact@celtictrekking.com</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42408.96!2d-4.1!3d48.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816bbe0cfc0eb4d%3A0x6d6b8c3c3c3c3c3c!2sQuimper%2C%20France!5e0!3m2!1sen!2sfr!4v1234567890"
                            width="100%"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Celtic Trekking Location">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
