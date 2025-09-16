@extends('layouts.app')
@section('title', 'ITExams - Exam Preparation')
@section('content')

    <div class="relative lg:hidden bg-cover bg-center" style="background-image: url('{{ asset('right-hero.jpg') }}')">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12">
            <div class="max-w-2xl bg-black/60 p-6 rounded-2xl">
                <h1 class="text-2xl sm:text-3xl font-bold leading-tight mb-4 text-white">
                    Ace Your IT Exams<br>
                    with Confidence
                </h1>

                <p class="text-lg sm:text-xl mb-6 text-white/90">
                    Practice with real exam-style questions and sharpen your skills
                    for certification success.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <input type="text" placeholder="Search for courses..."
                        class="w-full px-4 sm:px-6 py-3 sm:py-4 bg-white border border-gray-200 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent shadow-sm">
                    <button
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white text-pink-600 hover:bg-gray-100 font-semibold rounded-xl transition-colors duration-200 shadow-sm hover:shadow-md">
                        Search
                    </button>
                </div>

                <p class="text-xs sm:text-sm text-white/80">
                    Browse hundreds of IT exam prep courses with instant access.
                    <a href="#" class="underline hover:text-pink-300">View All Courses</a>
                </p>
            </div>
        </div>
    </div>
    <div class="hidden lg:block">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-6 lg:gap-12 items-center px-4 sm:px-6 py-12 lg:py-16">
            <div class="max-w-2xl order-1">
                <h1 class="text-3xl lg:text-6xl font-bold leading-tight mb-4 lg:mb-6 text-gray-900">
                    Ace Your IT Exams<br>
                    with Confidence
                </h1>

                <p class="text-lg lg:text-xl mb-6 lg:mb-10 text-gray-700">
                    Practice with real exam-style questions and sharpen your skills
                    for certification success.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 mb-6">
                    <div class="flex-1">
                        <input type="text" placeholder="Search for courses..."
                            class="w-full px-4 sm:px-6 py-3 sm:py-4 bg-white border border-gray-200 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent shadow-sm">
                    </div>
                    <button
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white text-pink-600 hover:bg-gray-100 font-semibold rounded-xl transition-colors duration-200 shadow-sm hover:shadow-md">
                        Search
                    </button>
                </div>

                <p class="text-xs sm:text-sm text-gray-600">
                    Browse hundreds of IT exam prep courses with instant access.
                    <a href="#" class="underline hover:text-pink-500">View All Courses</a>
                </p>
            </div>
            <div class="relative flex items-center justify-center order-2">
                <img src="{{ asset('right-hero.jpg') }}" alt="Hero Illustration"
                    class="w-80 h-96 object-cover rounded-3xl border-8 border-pink-500 shadow-xl">

                <div
                    class="absolute -top-6 left-12 w-12 h-12 bg-gradient-to-br from-pink-400 to-red-500 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_3s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">IT</span>
                </div>

                <div
                    class="absolute top-8 -right-8 w-12 h-12 bg-gradient-to-br from-yellow-300 to-yellow-500 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_3.6s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">AI</span>
                </div>

                <div
                    class="absolute bottom-8 -left-8 w-12 h-12 bg-gradient-to-br from-red-400 to-pink-600 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_4.2s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">UX</span>
                </div>

                <div
                    class="absolute -bottom-6 right-10 w-12 h-12 bg-gradient-to-br from-pink-300 to-red-400 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_4.8s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">DEV</span>
                </div>
            </div>
        </div>
    </div>

@endsection