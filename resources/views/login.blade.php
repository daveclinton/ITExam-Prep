@extends('layouts.minimal')
@section('title', 'ITExams - Exam Preparation')

@section('content')
<div class="min-h-screen relative flex items-center justify-center bg-cover bg-center"
    style="background-image: url('{{ asset('right-hero.jpg') }}')">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex flex-col lg:flex-row w-full max-w-6xl mx-auto">
        <div class="hidden lg:flex lg:flex-col lg:justify-center lg:w-1/2 p-12 text-white">
            <h1 class="text-5xl font-bold mb-6 drop-shadow-lg">
                Ready to reimagine your career?
            </h1>
            <p class="text-xl opacity-90 drop-shadow-md">
                Sign in to your account or create a new one to get started
            </p>
        </div>
        <div class="w-full lg:w-1/2 flex items-center justify-center p-6 lg:p-12">
            <div class="w-full max-w-md bg-white rounded-2xl shadow-lg p-8">
                <div class="max-w-md w-full mx-auto rounded-2xl bg-white p-8 border border-gray-200">
                    <!-- Header -->
                    <div class="mb-6 text-center">
                        <h1 class="text-2xl font-semibold text-gray-900">Welcome Back</h1>
                        <p class="text-sm text-gray-600 mt-1">Sign in to continue your journey</p>
                    </div>

                    <form class="space-y-5">
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                            <input id="email" type="email" placeholder="your_email@example.com"
                                class="w-full px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-black" />
                        </div>

                        <!-- Password -->
                        <div>
                            <div class="flex items-center justify-between mb-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <a href="#" class="text-xs text-gray-600 hover:underline">Forgot password?</a>
                            </div>
                            <div class="relative">
                                <input id="password" type="password" placeholder="••••••••"
                                    class="w-full px-3 py-2 pr-10 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-black" />
                                <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-400">
                                    <!-- Eye icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>


                        <label class="flex items-center gap-2 text-sm text-gray-700 cursor-pointer">
                            <input type="checkbox"
                                class="h-4 w-4 border-gray-300 rounded text-black focus:ring-black" />
                            Remember me
                        </label>


                        <button type="submit"
                            class="w-full flex items-center justify-center px-4 py-2 rounded-md bg-blue-400 text-white font-medium hover:bg-gray-900 transition">
                            Login
                        </button>


                        <p class="mt-4 text-center text-sm text-gray-600">
                            Don't have an account?
                            <a href="#" class="text-blue-400 font-medium hover:underline">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection