<section class="categories-section container my-5">
    <h5 class="mb-4">Explore our Popular Nursing Specialities</h5>

    @php
    $categories = [
    ['icon' => 'fa-stethoscope', 'title' => 'NCLEX-RN', 'subtitle' => '120+ Papers', 'slug' => 'nclex-rn'],
    ['icon' => 'fa-notes-medical', 'title' => 'NCLEX-PN', 'subtitle' => '100+ Papers', 'slug' => 'nclex-pn'],
    ['icon' => 'fa-user-nurse', 'title' => 'HESI Exams', 'subtitle' => '85+ Papers', 'slug' => 'hesi-exams'],
    ['icon' => 'fa-heartbeat', 'title' => 'Cardiac Nursing', 'subtitle' => '50+ Papers', 'slug' => 'cardiac-nursing'],
    ['icon' => 'fa-baby', 'title' => 'Pediatric Nursing', 'subtitle' => '40+ Papers', 'slug' => 'pediatric-nursing'],
    ['icon' => 'fa-syringe', 'title' => 'Pharmacology', 'subtitle' => '60+ Papers', 'slug' => 'pharmacology'],
    ['icon' => 'fa-brain', 'title' => 'Mental Health', 'subtitle' => '35+ Papers', 'slug' => 'mental-health'],
    ['icon' => 'fa-hospital', 'title' => 'Critical Care', 'subtitle' => '45+ Papers', 'slug' => 'critical-care'],
    ['icon' => 'fa-first-aid', 'title' => 'Emergency Nursing', 'subtitle' => '30+ Papers', 'slug' =>
    'emergency-nursing'],
    ['icon' => 'fa-lungs', 'title' => 'Respiratory Care', 'subtitle' => '28+ Papers', 'slug' => 'respiratory-care'],
    ];
    @endphp

    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-6 col-md-4 col-lg-2">
            <a href="{{ route('courses.index', ['category' => $category['slug']]) }}"
                class="text-decoration-none text-dark">
                <div class="category-card text-center p-3 border rounded h-100">
                    <i class="fas {{ $category['icon'] }} fa-2x mb-2"></i>
                    <h6 class="fw-bold">{{ $category['title'] }}</h6>
                    <p class="mb-0 small text-muted">{{ $category['subtitle'] }}</p>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</section>