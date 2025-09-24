<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'IT - Exam Preparation')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="flex flex-col min-h-screen">
    <div id="alertBanner"
        class="relative isolate flex items-center gap-x-6 overflow-hidden bg-blue-500 px-6 py-2 after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10 sm:px-3.5 sm:before:flex-1">
        <div aria-hidden="true"
            class="absolute top-1/2 left-[max(-7rem,calc(50%-52rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
            <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"
                class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-40"></div>
        </div>
        <div aria-hidden="true"
            class="absolute top-1/2 left-[max(45rem,calc(50%+8rem))] -z-10 -translate-y-1/2 transform-gpu blur-2xl">
            <div style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"
                class="aspect-577/310 w-144.25 bg-linear-to-r from-[#ff80b5] to-[#9089fc] opacity-40"></div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
            <p class="text-sm/6 text-gray-100">
                <strong class="font-semibold">Master Your IT Exam Prep
                </strong><svg viewBox="0 0 2 2" aria-hidden="true" class="mx-2 inline size-0.5 fill-current">
                    <circle r="1" cx="1" cy="1" />
                </svg>Access study guides, practice tests, and resources to help you pass your certification exams with
                confidence.
            </p>
            <a href="#"
                class="flex-none rounded-full bg-white/10 px-3.5 py-1 text-sm font-semibold text-white shadow-xs inset-ring-white/20 hover:bg-white/15 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">Get
                Started
                now <span aria-hidden="true">&rarr;</span></a>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" class="-m-3 p-3 focus-visible:-outline-offset-4">
                <span class="sr-only">Dismiss</span>
                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                    class="size-5 text-gray-100">
                    <path
                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                </svg>
            </button>
        </div>
    </div>
    <header class="bg-white sticky top-0 z-50 shadow py-5">
        <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between px-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="/" class="font-bold">
                    IT Exams Revision
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-600">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"
                        class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <el-popover-group class="hidden lg:flex lg:gap-x-12">
                <div class="relative">
                    <button popovertarget="desktop-menu-exams"
                        class="flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900">
                        Exams
                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            class="size-5 flex-none text-gray-500">
                            <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 
            1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 
            9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                        </svg>
                    </button>

                    <el-popover id="desktop-menu-exams" anchor="bottom" popover
                        class="w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg outline-1 -outline-offset-1 outline-gray-200">
                        <div class="p-4">
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-gray-200">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        aria-hidden="true" class="size-6 text-gray-600 group-hover:text-gray-900">
                                        <path d="M12 6v12m6-6H6" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        CompTIA Exams
                                        <span class="absolute inset-0"></span>
                                    </a>
                                    <p class="mt-1 text-gray-600">A+, Network+, Security+</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-gray-200">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        aria-hidden="true" class="size-6 text-gray-600 group-hover:text-gray-900">
                                        <path d="M3 7h18M3 12h18M3 17h18" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        Cisco Exams
                                    </a>
                                    <p class="mt-1 text-gray-600">CCNA, CCNP</p>
                                </div>
                            </div>
                            <div
                                class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                                <div
                                    class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-gray-200">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                        aria-hidden="true" class="size-6 text-gray-600 group-hover:text-gray-900">
                                        <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="flex-auto">
                                    <a href="#" class="block font-semibold text-gray-900">
                                        AWS & Cloud
                                    </a>
                                    <p class="mt-1 text-gray-600">AWS Solutions Architect, Azure, GCP</p>
                                </div>
                            </div>
                        </div>
                    </el-popover>
                </div>

                <a href="#" class="text-sm/6 font-semibold text-gray-900">Study Guides</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Practice Tests</a>
                <a href="#" class="text-sm/6 font-semibold text-gray-900">Resources</a>

            </el-popover-group>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="/login" class="text-sm/6 font-semibold text-gray-900">Log in <span
                        aria-hidden="true">&rarr;</span></a>
            </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel
                        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-200">
                        <div class="flex items-center justify-between">
                            <a href="/" class="-m-1.5 p-1.5">
                                <span class="sr-only">IT Exams Revision</span>
                                <img src="{{ asset('logo.png') }}" alt="Logo" class="h-8 w-auto" />
                            </a>
                            <button type="button" command="close" commandfor="mobile-menu"
                                class="-m-2.5 rounded-md p-2.5 text-gray-600">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    aria-hidden="true" class="size-6">
                                    <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-gray-200">
                                <div class="space-y-2 py-6">
                                    <div class="-mx-3">
                                        <button type="button" command="--toggle" commandfor="exams"
                                            class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">
                                            Exams
                                        </button>
                                        <el-disclosure id="exams" hidden class="mt-2 block space-y-2">
                                            <a href="#"
                                                class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-100">CompTIA
                                                (A+, Network+, Security+)</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-100">Cisco
                                                (CCNA, CCNP)</a>
                                            <a href="#"
                                                class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold text-gray-900 hover:bg-gray-100">AWS
                                                & Cloud</a>
                                        </el-disclosure>
                                    </div>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Study
                                        Guides</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Practice
                                        Tests</a>
                                    <a href="#"
                                        class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Resources</a>
                                </div>
                                <div class="py-6">
                                    <a href="/login"
                                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">Log
                                        in</a>
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>
    <main class="flex-grow lg:py-10">
        @yield('content')
    </main>
    <footer class="mt-auto bg-gradient-to-r from-blue-800 to-indigo-900 text-white">
        <div class="mx-auto max-w-screen-xl px-6 py-16 grid grid-cols-2 gap-12 md:grid-cols-4">
            <div>
                <h2 class="mb-6 text-base font-semibold uppercase">Company</h2>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:underline">About</a></li>
                    <li><a href="#" class="hover:underline">Careers</a></li>
                    <li><a href="#" class="hover:underline">Blog</a></li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-base font-semibold uppercase">Help Center</h2>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:underline">Support</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                    <li><a href="#" class="hover:underline">Community</a></li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-base font-semibold uppercase">Legal</h2>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms</a></li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-base font-semibold uppercase">Resources</h2>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:underline">Exam Guides</a></li>
                    <li><a href="#" class="hover:underline">Practice Tests</a></li>
                    <li><a href="#" class="hover:underline">Downloads</a></li>
                </ul>
            </div>
        </div>
        <div class="bg-white/10 py-6">
            <div class="mx-auto max-w-screen-xl flex flex-col md:flex-row items-center justify-between px-6">
                <span class="text-base">&copy; 2025 IT Exam Prep. All Rights Reserved.</span>
                <div class="flex mt-4 md:mt-0 space-x-6 text-lg">
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-gray-200"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const alertBanner = document.getElementById("alertBanner");
            const dismissBtn = alertBanner.querySelector("button");

            dismissBtn.addEventListener("click", () => {
                alertBanner.classList.add("hidden");
            });
        });
        document.querySelectorAll(".faq-toggle").forEach(button => {
            button.addEventListener("click", () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector("svg");

                if (content.classList.contains("max-h-0")) {
                    content.classList.remove("max-h-0");
                    content.classList.add("max-h-40");
                    icon.classList.add("rotate-180");
                } else {
                    content.classList.add("max-h-0");
                    content.classList.remove("max-h-40");
                    icon.classList.remove("rotate-180");
                }
            });
        });


        const showMoreBtn = document.getElementById("show-more-btn");
        const moreFaqs = document.getElementById("more-faqs");

        showMoreBtn.addEventListener("click", () => {
            moreFaqs.classList.toggle("hidden");
            showMoreBtn.textContent = moreFaqs.classList.contains("hidden") ?
                "Show all FAQs" :
                "Show fewer FAQs";
        });
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 3
                },
                1440: {
                    slidesPerView: 4
                },
            }
        });
    </script>
</body>

</html>