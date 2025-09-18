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
                        class="w-full px-4 sm:px-6 py-3 sm:py-4 bg-white border border-gray-200 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
                    <button
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white text-blue-600 hover:bg-gray-100 font-semibold rounded-xl transition-colors duration-200 shadow-sm hover:shadow-md">
                        Search
                    </button>
                </div>
                <p class="text-xs sm:text-sm text-white/80">
                    Browse hundreds of IT exam prep courses with instant access.
                    <a href="#" class="underline text-blue-300 hover:text-blue-300">View All Courses</a>
                </p>
            </div>
        </div>
    </div>
    <div class="hidden lg:block">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-6 lg:gap-12 items-center px-4 sm:px-6 py-12 lg:py-16">
            <div class="max-w-2xl order-1">
                <h1 class="text-2xl lg:text-4xl font-bold leading-tight mb-4 lg:mb-6 text-gray-900">
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
                            class="w-full px-4 sm:px-6 py-3 sm:py-4 bg-white border border-gray-200 rounded-xl text-gray-900  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm">
                    </div>
                    <button
                        class="px-6 sm:px-8 py-3 sm:py-4 bg-white text-blue-600 hover:bg-gray-100 font-semibold rounded-xl transition-colors duration-200 shadow-sm hover:shadow-md">
                        Search
                    </button>
                </div>
                <p class="text-xs sm:text-sm text-gray-600">
                    Browse hundreds of IT exam prep courses with instant access.
                    <a href="#" class="underline text-blue-500 hover:text-blue-500">View All Courses</a>
                </p>
            </div>
            <div class="relative flex items-center justify-center order-2">
                <img src="{{ asset('right-hero.jpg') }}" alt="Hero Illustration"
                    class="w-80 h-96 object-cover rounded-3xl border-8 border-blue-500 shadow-xl">

                <div
                    class="absolute -top-6 left-12 w-12 h-12 bg-gradient-to-br from-blue-400 to-sky-500 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_3s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">IT</span>
                </div>

                <div
                    class="absolute top-8 -right-8 w-12 h-12 bg-gradient-to-br from-blue-300 to-sky-500 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_3.6s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">AI</span>
                </div>

                <div
                    class="absolute bottom-8 -left-8 w-12 h-12 bg-gradient-to-br from-blue-400 to-sky-600 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_4.2s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">UX</span>
                </div>

                <div
                    class="absolute -bottom-6 right-10 w-12 h-12 bg-gradient-to-br from-blue-300 to-sky-400 rounded-2xl flex items-center justify-center shadow-lg animate-[ping_4.8s_ease-in-out_infinite]">
                    <span class="text-white font-bold text-sm text-center leading-none">DEV</span>
                </div>
            </div>
        </div>
    </div>

    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <div class="bg-white border border-gray-200 rounded-3xl p-8 text-center">
                <h2 class="text-xl font-bold mb-8">What brings you to ITExams today?</h2>
                <div class="flex flex-wrap justify-center gap-4">
                    <button
                        class="flex items-center gap-3 border border-gray-300 rounded-2xl px-5 py-3 hover:shadow-md transition bg-white">
                        <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-600 text-white">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 13a8 8 0 0 1 16 0v7H4v-7z" />
                                <path d="M12 3v10" />
                            </svg>
                        </span>
                        <span class="font-semibold text-gray-900">Category 1</span>
                    </button>
                    <button
                        class="flex items-center gap-3 border border-gray-300 rounded-2xl px-5 py-3 hover:shadow-md transition bg-white">
                        <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-600 text-white">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 4l6 6-6 6" />
                                <path d="M20 4h-5.5a3.5 3.5 0 0 0-3.5 3.5v0a3.5 3.5 0 0 0 3.5 3.5H20" />
                            </svg>
                        </span>
                        <span class="font-semibold text-gray-900">Category 2</span>
                    </button>

                    <button
                        class="flex items-center gap-3 border border-gray-300 rounded-2xl px-5 py-3 hover:shadow-md transition bg-white">
                        <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-600 text-white">

                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <path d="M3 17l6-6 4 4 8-8" />
                            </svg>
                        </span>
                        <span class="font-semibold text-gray-900">Category 3</span>
                    </button>
                    <button
                        class="flex items-center gap-3 border border-gray-300 rounded-2xl px-5 py-3 hover:shadow-md transition bg-white">
                        <span class="flex items-center justify-center w-10 h-10 rounded-lg bg-blue-600 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" stroke="currentColor"
                                stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="6" cy="15" r="3" />
                                <circle cx="18" cy="15" r="3" />
                                <path d="M3 15v-2a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v2" />
                            </svg>
                        </span>
                        <span class="font-semibold text-gray-900">Category 4</span>
                    </button>

                </div>
            </div>
        </div>
    </section>



    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-0">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                Explore IT Exams Revision
            </h2>
            <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <a href="/browse/data-science"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/data_science.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Data Science</h3>
                        <p class="text-sm text-gray-600">425 courses</p>
                    </div>
                </a>

                <a href="/browse/business"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/business.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Business</h3>
                        <p class="text-sm text-gray-600">1095 courses</p>
                    </div>
                </a>

                <a href="/browse/computer-science"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/computer_science.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Computer Science</h3>
                        <p class="text-sm text-gray-600">668 courses</p>
                    </div>
                </a>

                <a href="/browse/life-sciences"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/health.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Health</h3>
                        <p class="text-sm text-gray-600">471 courses</p>
                    </div>
                </a>

                <a href="/browse/social-sciences"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/social_sciences.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Social Sciences</h3>
                        <p class="text-sm text-gray-600">401 courses</p>
                    </div>
                </a>

                <a href="/browse/personal-development"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/personal_development.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Personal Development</h3>
                        <p class="text-sm text-gray-600">137 courses</p>
                    </div>
                </a>

                <a href="/browse/arts-and-humanities"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/arts_and_humanities.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Arts and Humanities</h3>
                        <p class="text-sm text-gray-600">338 courses</p>
                    </div>
                </a>

                <a href="/browse/physical-science-and-engineering"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/physical_science_and_engineering.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Physical Science and Engineering</h3>
                        <p class="text-sm text-gray-600">413 courses</p>
                    </div>
                </a>

                <a href="/browse/language-learning"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/language_learning.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Language Learning</h3>
                        <p class="text-sm text-gray-600">150 courses</p>
                    </div>
                </a>

                <a href="/browse/information-technology"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/information_technology.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Information Technology</h3>
                        <p class="text-sm text-gray-600">145 courses</p>
                    </div>
                </a>

                <a href="/browse/math-and-logic"
                    class="block bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="h-24 bg-cover bg-center"
                        style="background-image: url('https://s3.amazonaws.com/coursera_assets/browse/domains/math_and_logic.png');">
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900">Math and Logic</h3>
                        <p class="text-sm text-gray-600">70 courses</p>
                    </div>
                </a>

            </div>
        </div>
    </section>


    <section class="max-w-7xl mx-auto px-6 py-10 lg:px-0">
        <h2 class="text-3xl font-bold mb-4">Get started with GenAI</h2>
        <p class="text-gray-600 mb-6">
            Identify, develop, and execute impactful GenAI business strategies.
        </p>
        <div class=" grid md:grid-cols-3 gap-6">
            <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://d15cw65ipctsrr.cloudfront.net/6a/c05066a6c844d88417b4f10e0c1d20/600x600px_586281171.jpg"
                        alt="Building AI Agents" class="w-full h-40 object-cover">
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded">Free Trial</span>
                </div>
                <div class="p-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <img src="http://coursera-university-assets.s3.amazonaws.com/bb/f5ced2bdd4437aa79f00eb1bf7fbf0/IBM-Logo-Blk---Square.png"
                            class="w-6 h-6 rounded border">
                        <p class="text-sm text-gray-600">IBM</p>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">
                        <a href="/specializations/building-ai-agents-and-agentic-workflows" class="hover:underline">
                            Building AI Agents and Agentic Workflows
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Specialization</p>
                </div>
            </div>

            <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://coursera-course-photos.s3.amazonaws.com/5a/a94305e9ab4856afac4a34f49c3eb5/juleswhite_3d_colorful_volumeric_vibrant_reflective_geometric_o_456c5b74-cce5-4ada-a75f-66af533f31bd-2.png"
                        alt="Claude Code" class="w-full h-40 object-cover">
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded">Free Trial</span>
                </div>
                <div class="p-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <img src="http://coursera-university-assets.s3.amazonaws.com/89/63fef0315140268d5c0f66eee8e85e/VU_360x360.png"
                            class="w-6 h-6 rounded border">
                        <p class="text-sm text-gray-600">Vanderbilt University</p>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">
                        <a href="/learn/claude-code" class="hover:underline">
                            Claude Code: Software Engineering with Generative AI Agents
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Course</p>
                </div>
            </div>

            <div class="bg-white border rounded-lg overflow-hidden shadow hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://d15cw65ipctsrr.cloudfront.net/7d/66d977744a4a2d9a9594e517291e9f/AdobeStock_555641756.jpeg"
                        alt="AWS Generative AI" class="w-full h-40 object-cover">
                    <span class="absolute top-2 left-2 bg-gray-800 text-white text-xs px-2 py-1 rounded">Free Trial</span>
                </div>
                <div class="p-4">
                    <div class="flex items-center space-x-2 mb-2">
                        <img src="http://coursera-university-assets.s3.amazonaws.com/a4/7cd68a658840ddbb95c38cdd0bbc8e/aws-logo-icon-PNG-Transparent-Background.png"
                            class="w-6 h-6 rounded border">
                        <p class="text-sm text-gray-600">Amazon Web Services</p>
                    </div>
                    <h3 class="font-semibold text-lg mb-2">
                        <a href="/professional-certificates/aws-generative-ai-developers" class="hover:underline">
                            AWS Generative AI for Developers
                        </a>
                    </h3>
                    <p class="text-sm text-gray-500">Professional Certificate</p>
                </div>
            </div>

        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 mt-10 text-center">
        <a href="/explore/generative-ai"
            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
            View all Exams
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 20 20"
                stroke="currentColor">
                <path fill="currentColor"
                    d="M13.125 10.75H4.75a.728.728 0 01-.535-.214.72.72 0 01-.215-.532c0-.21.072-.39.215-.535a.72.72 0 01.535-.219h8.375L9.454 5.579a.721.721 0 01-.225-.527c0-.201.077-.382.23-.541a.745.745 0 011.058.006l4.954 4.96a.722.722 0 01.216.526.76.76 0 01-.052.282.692.692 0 01-.156.236l-4.958 4.958a.681.681 0 01-.521.219.776.776 0 01-.52-.23.766.766 0 01-.23-.544.71.71 0 01.23-.528l3.645-3.646z" />
            </svg>
        </a>
    </section>


    <section class="bg-white py-12">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center px-6">
            <div class="flex justify-center">
                <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/6xXERT0XZPJDXgjPzr8Bve/d858e0cda1a5e5df2cb8accd65d5c1b7/outcomes.png?auto=format%2Ccompress&dpr=1&w=606&h=553&q=40"
                    alt="Learner outcomes" class="w-full max-w-md md:max-w-lg rounded" />
            </div>
            <div class="space-y-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">
                    Proven exam success
                </h2>
                <p class="text-gray-700">
                    <strong>85% of learners report passing their IT certifications</strong>, after using our practice exams
                    and study guides. Get the confidence you need to succeed.
                </p>
                <div>
                    <button type="button"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg shadow-md">
                        Start Preparing
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section class="py-20 bg-blue-50">
        <div class="mx-auto max-w-7xl px-10 lg:px-0">
            <h2 class="text-3xl font-semibold text-gray-900 mb-10">Invest in your career</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left md:text-center">
                <div class="flex flex-col gap-4 items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="#0000FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-biceps-flexed-icon lucide-biceps-flexed">
                        <path
                            d="M12.409 13.017A5 5 0 0 1 22 15c0 3.866-4 7-9 7-4.077 0-8.153-.82-10.371-2.462-.426-.316-.631-.832-.62-1.362C2.118 12.723 2.627 2 10 2a3 3 0 0 1 3 3 2 2 0 0 1-2 2c-1.105 0-1.64-.444-2-1" />
                        <path d="M15 14a5 5 0 0 0-7.584 2" />
                        <path d="M9.964 6.825C8.019 7.977 9.5 13 8 15" />
                    </svg>
                    <h3 class="font-semibold text-gray-900 mb-1">Explore new skills</h3>
                    <p class="text-gray-600 text-sm">Access 10,000+ courses in AI, business, technology, and more.</p>
                </div>
                <div class="flex flex-col gap-4 items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="#0000FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-fan-icon lucide-fan">
                        <path
                            d="M10.827 16.379a6.082 6.082 0 0 1-8.618-7.002l5.412 1.45a6.082 6.082 0 0 1 7.002-8.618l-1.45 5.412a6.082 6.082 0 0 1 8.618 7.002l-5.412-1.45a6.082 6.082 0 0 1-7.002 8.618l1.45-5.412Z" />
                        <path d="M12 12v.01" />
                    </svg>
                    <h3 class="font-semibold text-gray-900 mb-1">Earn valuable credentials</h3>
                    <p class="text-gray-600 text-sm">Get certificates for every course you finish and boost your chances of
                        getting hired after your trial ends at no additional cost.</p>
                </div>
                <div class="flex flex-col gap-4 items-start md:items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                        stroke="#0000FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-bubbles-icon lucide-bubbles">
                        <path d="M7.2 14.8a2 2 0 0 1 2 2" />
                        <circle cx="18.5" cy="8.5" r="3.5" />
                        <circle cx="7.5" cy="16.5" r="5.5" />
                        <circle cx="7.5" cy="4.5" r="2.5" />
                    </svg>
                    <h3 class="font-semibold text-gray-900 mb-1">Learn from the best</h3>
                    <p class="text-gray-600 text-sm">Take your skills to the next level with expert-led courses and Coursera
                        Coach, your AI-powered guide.</p>
                </div>

            </div>
        </div>
    </section>





@endsection