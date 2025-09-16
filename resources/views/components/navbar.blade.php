<header class="bg-white">
    <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">IT Exams Revision</span>
                <img src="{{ asset('logo.png') }}" alt="Logo" class="h-20 w-auto" />
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
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
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
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-gray-200">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    aria-hidden="true" class="size-6 text-gray-600 group-hover:text-gray-900">
                                    <path d="M3 7h18M3 12h18M3 17h18" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Cisco Exams
                                </a>
                                <p class="mt-1 text-gray-600">CCNA, CCNP</p>
                            </div>
                        </div>
                        <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                            <div
                                class="flex size-11 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-gray-200">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                    aria-hidden="true" class="size-6 text-gray-600 group-hover:text-gray-900">
                                    <path d="M12 4.5v15m7.5-7.5h-15" stroke-linecap="round" stroke-linejoin="round" />
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
            <a href="#" class="text-sm/6 font-semibold text-gray-900">About Us</a>
        </el-popover-group>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm/6 font-semibold text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
    </nav>
    <el-dialog>
        <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
            <div tabindex="0" class="fixed inset-0 focus:outline-none">
                <el-dialog-panel
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-200">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
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
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-100">About
                                    Us</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
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