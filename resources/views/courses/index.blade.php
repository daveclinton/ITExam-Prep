@extends('layouts.app')

@section('title', 'All Courses - Nursing Practice')

@section('content')

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h2 class="mb-4 fw-bold">
                        @if($selectedCategory)
                            Showing results for
                            <span class="text-primary">
                                {{ strtoupper(str_replace('-', ' ', $selectedCategory)) }}
                            </span>
                        @else
                            Explore Exam Preps
                        @endif
                    </h2>
                </div>
            </div>

            <div class="row g-4">
                @forelse($courses as $course)
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="{{ route('courses.show', $course['id']) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 course-card border rounded-3 shadow-sm">
                                <div class="position-relative">
                                    <img src="{{ asset($course['image']) }}" class="card-img-top rounded-top"
                                        alt="{{ $course['full_title'] }}">
                                    <span
                                        class="badge bg-primary position-absolute top-0 start-0 m-2">{{ $course['code'] }}</span>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <h6 class="fw-semibold mb-2">{{ $course['full_title'] }}</h6>
                                    <p class="text-muted small mb-3">{{ Str::limit($course['description'], 60) }}</p>

                                    <div class="d-flex justify-content-between mb-2">
                                        <small><i class="fas fa-file-alt me-1 text-primary"></i>
                                            {{ $course['duration'] }}</small>
                                        <small><i class="fas fa-user-graduate me-1 text-success"></i>
                                            {{ $course['students'] }}</small>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mt-auto">
                                        <div class="price">
                                            <span
                                                class="text-muted text-decoration-line-through me-1">{{ $course['old_price'] }}</span>
                                            <span class="fw-bold text-success">{{ $course['new_price'] }}</span>
                                        </div>
                                        <span class="badge bg-info">{{ $course['level'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center py-4">
                            <i class="fas fa-info-circle me-2"></i>
                            No courses found
                            @if($selectedCategory)
                                for <strong>{{ strtoupper(str_replace('-', ' ', $selectedCategory)) }}</strong>.
                            @endif
                            <a href="{{ route('courses.index') }}" class="fw-bold">Browse all courses</a>.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection