@extends('layouts.app')

@section('title', 'Contact Us - IT Practice Questions')

@section('content')
    <section class="container max-w-7xl mx-auto px-6 py-16">
        <div class="grid md:grid-cols-2 items-center gap-8">
            <div>
                <h2 class="text-4xl font-bold">Contact Us</h2>
            </div>
            <div>
                <p class="text-lg">
                    Have questions? The quickest way to get in touch with us is using the contact information below.
                </p>
            </div>
        </div>
        <div class="mt-16 grid md:grid-cols-2 gap-8">
            <div class="rounded-xl shadow-sm p-6 flex items-start gap-4 hover:shadow-md transition">
                <div class="text-blue-500 text-3xl">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Email Us</h3>
                    <p class="mt-2 text-gray-600">Reach us anytime at:</p>
                    <a href="mailto:as@sample.com" class="mt-1 block text-blue-600 font-medium hover:underline">
                        as@sample.com
                    </a>
                </div>
            </div>
            <div class="rounded-xl shadow-sm p-6 flex items-start gap-4 hover:shadow-md transition">
                <div class="text-blue-500 text-3xl">
                    <i class="fa-solid fa-comments"></i>
                </div>
                <div>
                    <h3 class="text-xl font-semibold">Start a Chat</h3>
                    <p class="mt-2 text-gray-600">Our support team is available for instant help.</p>
                    <button class="mt-3 px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                        Start Chat
                    </button>
                </div>
            </div>
        </div>
    </section>
    @include('components.faq')
@endsection