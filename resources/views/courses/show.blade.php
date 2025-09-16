@extends('layouts.app')

@section('title', $course['full_title'] . ' - Nursing Practice')

@section('content')

<section class="course-hero-section bg-black text-white py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="mb-3">
                    <span class="badge bg-secondary">{{ $course['category'] ?? 'Exam Prep' }}</span>
                    <small class="ms-2">by {{ $course['instructor'] ?? 'Nursing Experts' }}</small>
                </div>
                <h1 class="fw-bold mb-3">{{ $course['full_title'] }}</h1>

                <div class="d-flex flex-wrap text-muted small">
                    <span class="me-4"><i class="fas fa-clock text-warning me-1"></i>
                        {{ $course['duration'] ?? 'Self-paced' }}</span>
                    <span class="me-4"><i class="fas fa-user-graduate text-warning me-1"></i>
                        {{ $course['students'] ?? '0' }} Students</span>
                    <span class="me-4"><i class="fas fa-layer-group text-warning me-1"></i>
                        {{ $course['level'] ?? 'All Levels' }}</span>
                    <span class="me-4"><i class="fas fa-book text-warning me-1"></i>
                        {{ count($course['modules'] ?? []) }} Lessons</span>
                    <span><i class="fas fa-question-circle text-warning me-1"></i> {{ $course['questions'] ?? 0 }}
                        Quizzes</span>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-white text-dark p-4 rounded shadow-lg text-center">
                    <img src="{{ asset($course['image']) ?? asset('images/default-course.png') }}"
                        alt="{{ $course['full_title'] }}" class="img-fluid rounded mb-3">
                    <div class="price mb-3">
                        <span
                            class="text-muted text-decoration-line-through me-2">{{ $course['old_price'] ?? '$59.00' }}</span>
                        <span class="fw-bold text-danger fs-4">{{ $course['new_price'] ?? '$49.00' }}</span>
                    </div>
                    <a href="#" class="btn btn-primary btn-lg w-100">Start Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-light">
    <div class="container">
        <ul class="nav nav-tabs mb-4" id="courseTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                    type="button" role="tab">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="curriculum-tab" data-bs-toggle="tab" data-bs-target="#curriculum"
                    type="button" role="tab">Curriculum</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="instructor-tab" data-bs-toggle="tab" data-bs-target="#instructor"
                    type="button" role="tab">Instructor</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="faqs-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button"
                    role="tab">FAQs</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab">Reviews</button>
            </li>
        </ul>

        <div class="tab-content" id="courseTabsContent">
            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                <div class="bg-white p-4 rounded shadow-sm">
                    {!! $course['detailed_description'] !!}
                </div>
            </div>
            <div class="tab-pane fade" id="curriculum" role="tabpanel">
                <div class="bg-white p-4 rounded shadow-sm">
                    <ul class="list-group">
                        @foreach($course['modules'] ?? [] as $module)
                        <li class="list-group-item d-flex justify-content-between">
                            <span>{{ $module['name'] }}</span>
                            <span class="text-muted">{{ $module['duration'] }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade" id="instructor" role="tabpanel">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h5>{{ $course['instructor'] ?? 'Instructor Name' }}</h5>
                    <p>Expert Nursing Educator with years of experience in exam prep and practical training.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="faqs" role="tabpanel">
                <div class="bg-white p-4 rounded shadow-sm">
                    <p><strong>Q:</strong> How long will I have access?</p>
                    <p><strong>A:</strong> Lifetime access, anytime, anywhere.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">
                <div class="bg-white p-4 rounded shadow-sm">
                    <p>No reviews yet. Be the first to review this course!</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection