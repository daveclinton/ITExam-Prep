<section class="exam-papers-section container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h5 class="mb-0">Explore our Popular Exam Papers</h5>
        <a href="{{ route('courses.index') }}" class="btn btn-outline-primary btn-sm">View All</a>
    </div>

    @php
    $examPapers = [
    [
    'id' => 'nclex-rn',
    'category' => 'NCLEX-RN',
    'image' => 'images/exam-papers/nclex-rn.png',
    'title' => 'NCLEX-RN Complete Revision Pack',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '250+ Questions',
    'students' => '500+ Students',
    'old_price' => '$59.00',
    'new_price' => '$49.00'
    ],
    [
    'id' => 'nclex-pn',
    'category' => 'NCLEX-PN',
    'image' => 'images/exam-papers/nclex-pn.png',
    'title' => 'NCLEX-PN Practice Papers Bundle',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '200+ Questions',
    'students' => '400+ Students',
    'old_price' => '$49.00',
    'new_price' => '$39.00'
    ],
    [
    'id' => 'hesi',
    'category' => 'HESI',
    'image' => 'images/exam-papers/hesi.png',
    'title' => 'HESI A2 Exam Paper Collection',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '180+ Questions',
    'students' => '350+ Students',
    'old_price' => '$45.00',
    'new_price' => '$35.00'
    ],
    [
    'id' => 'pharmacology',
    'category' => 'Pharmacology',
    'image' => 'images/exam-papers/pharmacology.png',
    'title' => 'Pharmacology Nursing Exam Set',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '150+ Questions',
    'students' => '300+ Students',
    'old_price' => '$39.00',
    'new_price' => '$29.00'
    ],
    [
    'id' => 'med-surg',
    'category' => 'Medical-Surgical',
    'image' => 'images/exam-papers/med-surg.png',
    'title' => 'Med-Surg Nursing Practice Papers',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '200+ Questions',
    'students' => '280+ Students',
    'old_price' => '$39.00',
    'new_price' => '$29.00'
    ],
    [
    'id' => 'pediatrics',
    'category' => 'Pediatrics',
    'image' => 'images/exam-papers/pediatrics.png',
    'title' => 'Pediatric Nursing Exam Pack',
    'instructor' => 'Prepared by Nursing Experts',
    'duration' => '100+ Questions',
    'students' => '250+ Students',
    'old_price' => '$35.00',
    'new_price' => '$25.00'
    ]
    ];
    @endphp

    <div class="row g-4">
        @foreach($examPapers as $paper)
        <div class="col-12 col-md-6 col-lg-4">
            <a href="{{ route('courses.show', $paper['id']) }}" class="text-decoration-none text-dark">
                <div class="exam-card border rounded-3 shadow-sm h-100">
                    <div class="exam-img position-relative">
                        <img src="{{ asset($paper['image']) }}" alt="{{ $paper['title'] }}"
                            class="img-fluid rounded-top">
                        <span
                            class="badge bg-primary position-absolute top-0 start-0 m-2">{{ $paper['category'] }}</span>
                    </div>
                    <div class="exam-content p-3">
                        <p class="text-muted small mb-1">{{ $paper['instructor'] }}</p>
                        <h6 class="fw-semibold mb-3">{{ $paper['title'] }}</h6>
                        <div class="d-flex justify-content-between mb-2">
                            <span><i class="fas fa-file-alt text-primary me-1"></i> {{ $paper['duration'] }}</span>
                            <span><i class="fas fa-user-graduate text-success me-1"></i> {{ $paper['students'] }}</span>
                        </div>
                        <div class="price">
                            <span class="text-muted text-decoration-line-through me-2">{{ $paper['old_price'] }}</span>
                            <span class="fw-bold text-success">{{ $paper['new_price'] }}</span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>