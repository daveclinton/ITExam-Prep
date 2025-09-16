<section class="testimonials-section container my-10">
    <div class="mb-5">
        <h2 class="fw-bold">What Students Say About NurseExam Pro</h2>
        <p class="text-muted">Trusted by thousands of nursing students worldwide for exam success.</p>
    </div>

    @php
    $testimonials = [
    ['quote' => 'NurseExam Pro helped me pass my NCLEX on the first try!', 'name' => 'Emily Johnson', 'role' =>
    'Registered Nurse'],
    ['quote' => 'The mock tests are so realistic and helpful!', 'name' => 'Michael Lee', 'role' => 'Nursing Student'],
    ['quote' => 'I loved the detailed explanations for every question.', 'name' => 'Sophia Martinez', 'role' => 'LPN
    Candidate'],
    ['quote' => 'Affordable, structured, and easy to use.', 'name' => 'James Carter', 'role' => 'BSN Graduate'],
    ['quote' => 'Highly recommend for anyone preparing for nursing exams!', 'name' => 'Sarah Kim', 'role' => 'RN
    Student'],
    ['quote' => 'The study guides are very well-organized and clear.', 'name' => 'Daniel Scott', 'role' => 'Practical
    Nurse'],
    ['quote' => 'The platform saved me so much time during revision!', 'name' => 'Linda Brown', 'role' => 'NCLEX
    Candidate'],
    ['quote' => 'Love the mock exams. They feel like the real thing!', 'name' => 'Alex Green', 'role' => 'Nursing
    Graduate'],
    ];
    @endphp

    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach(array_chunk($testimonials, 4) as $index => $testimonialChunk)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="row g-4">
                    @foreach($testimonialChunk as $testimonial)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="testimonial-card p-4 h-100 text-center">
                            <div class="quote-icon">“</div>
                            <p class="testimonial-text mb-4">{{ $testimonial['quote'] }}</p>
                            <h6 class="fw-bold">{{ $testimonial['name'] }}</h6>
                            <p class="text-muted">{{ $testimonial['role'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>