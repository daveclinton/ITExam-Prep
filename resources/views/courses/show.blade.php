@extends('layouts.app')

@section('title', $course['full_title'] . ' - Nursing Practice')

@section('content')

    <div class="max-w-7xl mx-auto p-6">
        <div class="text-sm text-gray-500 mb-4">
            <span>Data Science</span> › <span>Machine Learning</span>
        </div>
        <div class="flex items-center mb-6">
            <img src="http://coursera-university-assets.s3.amazonaws.com/71/4711914b204d25b125aae53b207b38/Dimensional_V_Black_Lockup_200x48.png"
                alt="Vanderbilt University" class="h-12 mr-4">
            <span class="font-semibold text-lg">Vanderbilt University</span>
        </div>>
        <h1 class="text-3xl font-bold mb-2">Prompt Engineering Specialization</h1>
        <p class="text-gray-700 mb-4">
            Become a Prompt Engineering Expert. Master prompt engineering patterns, techniques, and approaches to
            effectively leverage Generative AI
        </p>
        <div class="flex items-center mb-6">
            <img src="https://coursera-instructor-photos.s3.amazonaws.com/df/dc80e59d1f4c7984b844b0cf20fa12/Jules-White.jpg"
                alt="Instructor" class="w-10 h-10 rounded-full mr-3">
            <p class="text-gray-800">Instructor: <a href="#" class="text-blue-600 hover:underline">Dr. Jules White</a></p>
        </div>
        <div class="flex items-center gap-4 mb-6">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
                Enroll for free <br><span class="text-sm font-normal">Starts Sep 18</span>
            </button>
            <p class="text-gray-600 text-sm">Try for free: Enroll to start your 7-day full access free trial</p>
        </div>
        <p class="text-gray-700 mb-6">
            <span class="font-semibold">98,639</span> already enrolled • Included with
            <span class="text-blue-600 font-semibold">Coursera Plus</span>
        </p>
        <div class="bg-white rounded-xl shadow p-6 flex flex-wrap gap-6 text-center">
            <div class="flex-1">
                <p class="font-semibold underline">3 course series</p>
                <p class="text-gray-600 text-sm">Get in-depth knowledge of a subject</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">⭐ 4.8</p>
                <p class="text-gray-600 text-sm">(3,049 reviews)</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">Beginner level</p>
                <p class="text-gray-600 text-sm">Recommended experience</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">1 month at 10 hours a week</p>
                <p class="text-gray-600 text-sm">Flexible schedule</p>
            </div>
            <div class="flex-1">
                <p class="font-semibold">Earn a career credential</p>
                <p class="text-gray-600 text-sm">Share your expertise with employers</p>
            </div>
        </div>
    </div>
@endsection