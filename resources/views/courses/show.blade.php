@extends('layouts.app')

@section('title', $course['full_title'] . ' - IT Exam Practice')

@section('content')
    <div class="max-w-7xl mx-auto p-6">
        <div class="text-sm text-gray-500 mb-4">
            <span>IT Exams</span> › <span>Exam Revision</span>
        </div>
        <div class="flex items-center mb-6">
            <img src="http://coursera-university-assets.s3.amazonaws.com/71/4711914b204d25b125aae53b207b38/Dimensional_V_Black_Lockup_200x48.png"
                alt="Exam Provider" class="h-12 mr-4">
            <span class="font-semibold text-lg">Official Exam Provider</span>
        </div>
        <h1 class="text-3xl font-bold mb-2">{{ $course['full_title'] }}</h1>
        <p class="text-gray-700 mb-4">
            Access the full {{ $course['full_title'] }} practice paper. Revise with real-style questions,
            explanations, and exam-focused materials to prepare effectively.
        </p>
        <div class="flex items-center mb-6">
            <img src="https://coursera-instructor-photos.s3.amazonaws.com/df/dc80e59d1f4c7984b844b0cf20fa12/Jules-White.jpg"
                alt="Exam Author" class="w-10 h-10 rounded-full mr-3">
            <p class="text-gray-800">Prepared by:
                <a href="#" class="text-blue-600 hover:underline">Dr. Jules White</a>
            </p>
        </div>
        <div class="flex items-center gap-4 mb-6">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
                Unlock Exam Paper <br><span class="text-sm font-normal">Price: $49</span>
            </button>
            <p class="text-gray-600 text-sm">Get instant access to the complete revision paper</p>
        </div>
        <p class="text-gray-700 mb-6">
            <span class="font-semibold">98,639</span> students practiced • Updated this month
        </p>
        <div class="bg-white rounded-xl shadow p-6 flex flex-wrap gap-6 text-center">
            <div class="flex-1">
                <p class="font-semibold underline">Exam Paper</p>
                <p class="text-gray-600 text-sm">Includes full set of practice questions</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">⭐ 4.8</p>
                <p class="text-gray-600 text-sm">(3,049 reviews)</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">Intermediate</p>
                <p class="text-gray-600 text-sm">Difficulty level</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">2 weeks at 5 hours a week</p>
                <p class="text-gray-600 text-sm">Recommended prep time</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">Completion Proof</p>
                <p class="text-gray-600 text-sm">Showcase your readiness</p>
            </div>
        </div>
        <section class="p-6 bg-white rounded-xl mt-10 shadow">
            <h2 class="text-2xl font-bold mb-4">Overview</h2>
            <p class="text-gray-700 mb-6">
                This practice exam contains authentic-style questions and detailed solutions to strengthen your
                knowledge and get you ready for the official {{ $course['full_title'] }} exam.
            </p>
            <h2 class="text-2xl font-bold mb-3">Exam Topics</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1 mb-4">
                <li>1. Practice Questions</li>
                <li>2. Core Exam Areas</li>
                <li>3. Case Scenarios</li>
                <li>4. Answer Explanations</li>
                <li>5. Exam Readiness Tips</li>
            </ul>
            <button
                class="flex items-center px-4 py-1.5 border border-blue-600 text-blue-600 text-sm rounded hover:bg-blue-600 hover:text-white transition">
                View all questions <span class="ml-1">▼</span>
            </button>
            <hr class="my-6">
            <div>
                <h3 class="text-lg font-semibold mb-1">Prepared by</h3>
                <p class="text-gray-700">Sebastian Thrun</p>
            </div>
        </section>

    </div>

@endsection