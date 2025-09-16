<footer class="footer bg-light text-center text-md-start mt-5 border-top">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="d-flex align-items-center mb-2">
                    <div class="logo-icon d-flex align-items-center justify-content-center">
                        <span class="text-white fw-bold">N+</span>
                    </div>
                    <span class="fs-5 fw-bold ms-2">NurseExam Pro</span>
                </div>
                <p class="text-muted">
                    Your trusted platform for nursing exam preparation. Practice tests, study guides, and NCLEX prep all
                    in one place.
                </p>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'exam-papers']) }}" class="footer-link">Exam
                            Papers</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'practice-tests']) }}"
                            class="footer-link">Practice Tests</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'study-guides']) }}" class="footer-link">Study
                            Guides</a></li>
                    <li><a href="{{ route('courses.index', ['category' => 'nclex-prep']) }}" class="footer-link">NCLEX
                            Prep</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold mb-3">Contact Us</h6>
                <p class="text-muted mb-1"><i class="fas fa-envelope me-2"></i> support@nurseexampro.com</p>
                <p class="text-muted mb-3"><i class="fas fa-phone me-2"></i> +1 800 123 4567</p>
                <div class="d-flex gap-3">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="text-center small text-muted">
            &copy; 2025 NurseExam Pro. All rights reserved.
        </div>
    </div>
</footer>