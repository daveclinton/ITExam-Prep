@extends('layouts.app')

@section('title', 'All Papers - IT Exam Practices')

@section('content')
    <div class="space-y-4 max-w-3xl mx-auto p-4">
        <div class="border rounded-lg p-4 bg-white shadow-sm flex flex-col md:flex-row md:justify-between">
            <div class="flex space-x-3">
                <img src="{{ asset('images/image-five.jpg') }}" alt="Exam Paper"
                    class="rounded-md w-24 h-16 object-cover" />
                <div>
                    <p class="text-red-700 text-sm font-semibold">Cisco Certified Network Associate</p>
                    <h2 class="text-lg font-bold">CCNA Practice Paper</h2>
                    <div class="flex items-center space-x-1 mt-1">
                        <span class="text-blue-600 text-sm">★★★★☆</span>
                        <span class="text-xs text-gray-500">120 attempts</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-600">
                        Unlock CCNA exam practice questions with real-world scenarios to test your networking knowledge.
                    </p>
                    <div class="mt-2 flex items-center space-x-3">
                        <span class="text-sm font-semibold text-green-700">$9.99</span>
                        <button class="px-2 py-1 border rounded text-xs text-gray-700 hover:bg-gray-50">
                            Unlock Paper
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-3 md:mt-0 space-y-1 text-xs text-gray-700">
                <div class="flex items-center space-x-1">
                    <span>📚</span><span>50 Qs</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span>⏱️</span><span>90 Min</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span>📅</span><span>2025</span>
                </div>
            </div>
        </div>
        <div class="border rounded-lg p-4 bg-white shadow-sm flex flex-col md:flex-row md:justify-between">
            <div class="flex space-x-3">
                <img src="{{ asset('images/image-four.jpg') }}" alt="Exam Paper"
                    class="rounded-md w-24 h-16 object-cover" />
                <div>
                    <span class="text-[10px] px-2 py-0.5 rounded bg-blue-100 text-blue-800 font-medium">Premium</span>
                    <h2 class="text-lg font-bold mt-1">AWS Solutions Architect Paper</h2>
                    <div class="flex items-center space-x-1 mt-1">
                        <span class="text-blue-600 text-sm">★★★★★</span>
                        <span class="text-xs text-gray-500">250 attempts</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-600">
                        Practice AWS Solutions Architect exam with scenario-based questions and detailed explanations.
                    </p>
                    <div class="mt-2 flex items-center space-x-3">
                        <span class="text-sm font-semibold text-green-700">$14.99</span>
                        <button class="px-2 py-1 border rounded text-xs text-gray-700 hover:bg-gray-50">
                            Unlock Paper
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-3 md:mt-0 space-y-1 text-xs text-gray-700">
                <div class="flex items-center space-x-1">
                    <span>📚</span><span>65 Qs</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span>⏱️</span><span>130 Min</span>
                </div>
                <div class="flex items-center space-x-1">
                    <span>📅</span><span>2025</span>
                </div>
            </div>
        </div>
    </div>
@endsection