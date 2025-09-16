@extends('layouts.app')

@section('title', 'About Us - WGU Practice Questions')

@section('content')
<section class="about-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">About WGU Practice</h1>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('about-hero.avif') }}" alt="Students studying together"
                    class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>


<section class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <h2 class="mb-4">Our Story</h2>
            <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </div>
</section>


<section class="container mb-5">
    <h2 class="text-center mb-5">Our Values</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="value-card p-4 h-100 text-center">
                <div class="mb-4">
                    <i class="bi bi-award-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Quality</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="value-card p-4 h-100 text-center">
                <div class="mb-4">
                    <i class="bi bi-people-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Student Success</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="value-card p-4 h-100 text-center">
                <div class="mb-4">
                    <i class="bi bi-lightbulb-fill display-4 text-primary"></i>
                </div>
                <h4 class="mb-3">Innovation</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</section>

<section class="container mb-5">
    <h2 class="text-center mb-5">Our Team</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="team-member text-center">
                <img src="{{ asset('avatar-two.jpg') }}" alt="Team member" class="rounded-circle mb-3" width="150"
                    height="150">
                <h4>Michael Johnson</h4>
                <p class="text-muted">Founder & CEO</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="team-member text-center">
                <img src="{{ asset('avatar-three.jpg') }}" alt="Team member" class="rounded-circle mb-3" width="150"
                    height="150">
                <h4>Sarah Williams</h4>
                <p class="text-muted">Content Director</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="team-member text-center">
                <img src="{{ asset('avatar-one.jpg') }}" alt="Team member" class="rounded-circle mb-3" width="150"
                    height="150">
                <h4>David Chen</h4>
                <p class="text-muted">Technology Lead</p>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</section>
@endsection