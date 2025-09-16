<section class="faq-section container my-5">
    <div class=" mb-5">
        <h2 class="fw-bold">Frequently Asked Questions</h2>
        <p class="text-muted">Find answers to common questions about NurseExam Pro, exams, and resources.</p>
    </div>

    <div class="row align-items-center">
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
            <img src="{{ asset('Vector.png') }}" alt="FAQs" class="img-fluid illustration">
        </div>
        <div class="col-lg-6">
            <div class="accordion" id="faqAccordion">

                @php
                $faqs = [
                ['question' => 'What is NurseExam Pro?', 'answer' => 'NurseExam Pro is a comprehensive platform offering
                NCLEX, HESI, and specialty exam resources to help nursing students and professionals succeed.'],
                ['question' => 'How do I access exam papers?', 'answer' => 'Simply sign up for a free account and browse
                through our extensive library of nursing exam papers, practice tests, and study guides.'],
                ['question' => 'Are the practice tests timed?', 'answer' => 'Yes, our practice tests simulate real exam
                conditions, including time limits, to help you prepare effectively.'],
                ['question' => 'Do you offer NCLEX prep courses?', 'answer' => 'Yes, we offer NCLEX preparation
                materials, practice questions, and study guides designed by experienced nursing professionals.'],
                ['question' => 'Can I download the study materials?', 'answer' => 'Yes, you can download most of our
                resources for offline study after purchase or enrollment in a course.'],
                ];
                @endphp

                @foreach($faqs as $index => $faq)
                <div class="accordion-item mb-3">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                            aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                            {{ $faq['question'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                        aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>