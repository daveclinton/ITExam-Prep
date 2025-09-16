<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $courses = [
        'nclex-rn' => [
            'id' => 'nclex-rn',
            'code' => 'NCLEX-RN',
            'title' => 'NCLEX-RN Complete Revision Pack',
            'full_title' => 'NCLEX-RN: Complete Exam Papers & Practice Tests',
            'description' => 'Get access to 250+ NCLEX-RN style questions with detailed rationales.',
            'detailed_description' => '<p>Prepare for the NCLEX-RN with the most comprehensive practice exam pack, including detailed explanations, rationales, and performance tracking to help you succeed.</p>',
            'image' => 'images/exam-papers/nclex-rn.png',
            'duration' => '250+ Questions',
            'level' => 'Advanced',
            'rating' => 4.9,
            'students' => '500+ Students',
            'questions' => 250,
            'old_price' => '$59.00',
            'new_price' => '$49.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Master NCLEX-RN question formats',
                'Learn rationales for correct & incorrect answers',
                'Boost confidence before the real exam',
                'Track your performance effectively'
            ],
            'modules' => [
                ['name' => 'Practice Test 1', 'duration' => '75 Questions'],
                ['name' => 'Practice Test 2', 'duration' => '75 Questions'],
                ['name' => 'Practice Test 3', 'duration' => '100 Questions']
            ]
        ],

        'nclex-pn' => [
            'id' => 'nclex-pn',
            'code' => 'NCLEX-PN',
            'title' => 'NCLEX-PN Practice Papers Bundle',
            'full_title' => 'NCLEX-PN: Practice Tests & Review Materials',
            'description' => 'Comprehensive NCLEX-PN exam papers and rationales for practical nurses.',
            'detailed_description' => '<p>This NCLEX-PN bundle offers real-world practice questions designed by experts, including explanations and performance tips to improve your scores.</p>',
            'image' => 'images/exam-papers/nclex-pn.png',
            'duration' => '200+ Questions',
            'level' => 'Intermediate',
            'rating' => 4.8,
            'students' => '400+ Students',
            'questions' => 200,
            'old_price' => '$49.00',
            'new_price' => '$39.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Understand NCLEX-PN test structure',
                'Practice clinical judgment questions',
                'Learn test-taking strategies',
                'Track progress with analytics'
            ],
            'modules' => [
                ['name' => 'Practice Test 1', 'duration' => '50 Questions'],
                ['name' => 'Practice Test 2', 'duration' => '75 Questions'],
                ['name' => 'Practice Test 3', 'duration' => '75 Questions']
            ]
        ],

        'hesi' => [
            'id' => 'hesi',
            'code' => 'HESI',
            'title' => 'HESI A2 Exam Paper Collection',
            'full_title' => 'HESI A2: Complete Practice Test Collection',
            'description' => 'Ace your HESI exam with detailed practice papers and rationales.',
            'detailed_description' => '<p>This pack includes multiple HESI practice exams with rationales and preparation strategies for nursing students.</p>',
            'image' => 'images/exam-papers/hesi.png',
            'duration' => '180+ Questions',
            'level' => 'Advanced',
            'rating' => 4.9,
            'students' => '350+ Students',
            'questions' => 180,
            'old_price' => '$45.00',
            'new_price' => '$35.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Understand HESI exam structure',
                'Practice with realistic questions',
                'Review rationales for every answer',
                'Enhance time management skills'
            ],
            'modules' => [
                ['name' => 'HESI Practice Test 1', 'duration' => '60 Questions'],
                ['name' => 'HESI Practice Test 2', 'duration' => '60 Questions'],
                ['name' => 'HESI Practice Test 3', 'duration' => '60 Questions']
            ]
        ],

        'pharmacology' => [
            'id' => 'pharmacology',
            'code' => 'PHARM',
            'title' => 'Pharmacology Nursing Exam Set',
            'full_title' => 'Pharmacology: Nursing Exam Practice Papers',
            'description' => 'Test your pharmacology knowledge with 150+ questions.',
            'detailed_description' => '<p>Perfect for pharmacology prep, this pack includes detailed explanations and rationales for each question to help nursing students master drug calculations and safety.</p>',
            'image' => 'images/exam-papers/pharmacology.png',
            'duration' => '150+ Questions',
            'level' => 'Intermediate',
            'rating' => 4.7,
            'students' => '300+ Students',
            'questions' => 150,
            'old_price' => '$39.00',
            'new_price' => '$29.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Understand drug classifications',
                'Practice dosage calculations',
                'Learn safe medication administration',
                'Boost pharmacology exam readiness'
            ],
            'modules' => [
                ['name' => 'Pharmacology Test 1', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 2', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 3', 'duration' => '50 Questions']
            ]
        ],
        'med-surg' => [
            'id' => 'med-surg',
            'code' => 'MED-SURG',
            'title' => 'Med-Surg Nursing Practice Papers',
            'full_title' => 'Pharmacology: Nursing Exam Practice Papers',
            'description' => 'Test your pharmacology knowledge with 150+ questions.',
            'detailed_description' => '<p>Perfect for pharmacology prep, this pack includes detailed explanations and rationales for each question to help nursing students master drug calculations and safety.</p>',
            'image' => 'images/exam-papers/med-surg.png',
            'duration' => '150+ Questions',
            'level' => 'Intermediate',
            'rating' => 4.7,
            'students' => '300+ Students',
            'questions' => 150,
            'old_price' => '$39.00',
            'new_price' => '$29.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Understand drug classifications',
                'Practice dosage calculations',
                'Learn safe medication administration',
                'Boost pharmacology exam readiness'
            ],
            'modules' => [
                ['name' => 'Pharmacology Test 1', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 2', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 3', 'duration' => '50 Questions']
            ]
        ],
        'pediatrics' => [
            'id' => 'pediatrics',
            'code' => 'PEDIATRICS',
            'title' => 'Med-Surg Nursing Practice Papers',
            'full_title' => 'Pharmacology: Nursing Exam Practice Papers',
            'description' => 'Test your pharmacology knowledge with 150+ questions.',
            'detailed_description' => '<p>Perfect for pharmacology prep, this pack includes detailed explanations and rationales for each question to help nursing students master drug calculations and safety.</p>',
            'image' => 'images/exam-papers/pediatrics.png',
            'duration' => '150+ Questions',
            'level' => 'Intermediate',
            'rating' => 4.7,
            'students' => '300+ Students',
            'questions' => 150,
            'old_price' => '$39.00',
            'new_price' => '$29.00',
            'instructor' => 'Prepared by Nursing Experts',
            'objectives' => [
                'Understand drug classifications',
                'Practice dosage calculations',
                'Learn safe medication administration',
                'Boost pharmacology exam readiness'
            ],
            'modules' => [
                ['name' => 'Pharmacology Test 1', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 2', 'duration' => '50 Questions'],
                ['name' => 'Pharmacology Test 3', 'duration' => '50 Questions']
            ]
        ]
    ];

    public function welcome()
    {
        $courses = collect(array_values($this->courses))
            ->sortByDesc('students')
            ->take(6);

        return view('welcome', compact('courses'));
    }

    public function show($id)
    {
        if (!array_key_exists($id, $this->courses)) {
            abort(404, 'Course not found');
        }
        $course = $this->courses[$id];
        $relatedCourses = $this->courses;
        unset($relatedCourses[$id]);
        $relatedCourses = array_slice(array_values($relatedCourses), 0, 3);

        return view('courses.show', [
            'course' => $course,
            'relatedCourses' => $relatedCourses
        ]);
    }

    public function index(Request $request)
    {
        $category = $request->query('category');

        $courses = collect($this->courses);

        if ($category) {
            $category = strtolower($category);
            $courses = $courses->filter(function ($course) use ($category) {
                return strtolower($course['id']) === $category
                    || strtolower($course['code']) === $category
                    || str_contains(strtolower($course['full_title']), $category)
                    || str_contains(strtolower($course['title']), $category);
            });
        }

        return view('courses.index', [
            'courses' => $courses->values()->all(),
            'selectedCategory' => $category
        ]);
    }

}