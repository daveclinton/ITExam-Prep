<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'NurseExamPro - Exam Preparation')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    @include('components.alert-banner')
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
    <button id="scrollTopBtn" class="btn btn-primary d-flex align-items-center shadow scroll-top-btn"
        style="position: fixed; bottom: 20px; right: 20px; z-index: 1050; border-radius: 50px; padding: 8px 14px;">
        <i class="bi bi-chevron-up me-2"></i>
        <span>Scroll to top</span>
    </button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.getElementById("mobileMenuToggle");
            const menu = document.getElementById("mobileMenu");

            const searchToggle = document.getElementById("mobileSearchToggle");
            const search = document.getElementById("mobileSearch");

            menuToggle.addEventListener("click", () => {
                menu.classList.toggle("d-none");
                search.classList.add("d-none");
            });

            searchToggle.addEventListener("click", () => {
                search.classList.toggle("d-none");
                menu.classList.add("d-none");

            });
        });
    </script>
    @stack('scripts')
</body>

</html>