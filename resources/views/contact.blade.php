@extends('layouts.app')

@section('title', 'Contact Us - WGU Practice Questions')

@section('content')
<section class="contact-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur commodo
                    feugiat leo, et varius nulla eleifend ut.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('contact.avif') }}" alt="Customer support" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="contact-info-card p-4 text-center">
                <div class="mb-4">
                    <i class="bi bi-envelope-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Email Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="mailto:support@wgupractice.com" class="btn btn-outline-primary">support@wgupractice.com</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info-card p-4 text-center">
                <div class="mb-4">
                    <i class="bi bi-telephone-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Call Us</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="tel:+18005551234" class="btn btn-outline-primary">+1 (800) 555-1234</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="contact-info-card p-4 text-center">
                <div class="mb-4">
                    <i class="bi bi-chat-dots-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Live Chat</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="btn btn-outline-primary">Start Chat</a>
            </div>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="contact-form">
                <h2 class="text-center mb-4">Send us a Message</h2>
                <p class="text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod
                    lectus at neque suscipit, nec ultricies libero iaculis.</p>
                <form>
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select class="form-select" id="subject" required>
                            <option value="" selected disabled>Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="technical">Technical Support</option>
                            <option value="billing">Billing Question</option>
                            <option value="feedback">Feedback</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection