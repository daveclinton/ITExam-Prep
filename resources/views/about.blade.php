@extends('layouts.app')

@section('title', 'About Us - IT Practice Questions')

@section('content')
    <section class="relative w-full h-[500px] flex items-center justify-center">
        <div class="absolute inset-0 bg-blue-900"></div>
        <div class="relative container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold text-white">
                About IT Practice Questions
            </h1>
            <p class="mt-4 text-lg text-gray-100 max-w-2xl mx-auto">
                Helping IT professionals and students prepare, practice, and pass their exams with confidence.
            </p>
        </div>
    </section>
    <section class="bg-blue-50 py-6">
        <div class="container mx-auto px-6 text-center">
            <p>
                <a href="#" class="text-blue-700 font-semibold hover:underline">
                    📢 Check out our latest updates and exam prep resources!
                </a>
            </p>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Skills are the key to unlocking your IT career
            </h2>
            <p class="mt-6 text-lg text-gray-700">
                Whether you’re aiming to earn a certification, prepare for your WGU assessments,
                or strengthen your IT knowledge, we provide practice tools and resources
                designed to help you succeed.
            </p>
        </div>
    </section>
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 text-center max-w-3xl">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Creating impact across IT learners worldwide
            </h2>
            <p class="mt-6 text-lg text-gray-700">
                Our growing community of students and professionals rely on WGU Practice Questions
                to prepare effectively, gain confidence, and thrive in their IT journeys.
            </p>
        </div>
        <div class="mt-12 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 text-center">
            <div class="text-3xl font-bold text-blue-600">25K+ <span class="block text-sm text-gray-600">Learners</span>
            </div>
            <div class="text-3xl font-bold text-blue-600">1.2K+ <span class="block text-sm text-gray-600">Practice
                    Sets</span></div>
            <div class="text-3xl font-bold text-blue-600">50+ <span class="block text-sm text-gray-600">IT Domains</span>
            </div>
            <div class="text-3xl font-bold text-blue-600">200K+ <span class="block text-sm text-gray-600">Questions
                    Answered</span></div>
            <div class="text-3xl font-bold text-blue-600">15 <span class="block text-sm text-gray-600">Languages</span>
            </div>
            <div class="text-3xl font-bold text-blue-600">500+ <span class="block text-sm text-gray-600">University
                    Students</span></div>
        </div>
    </section>

@endsection