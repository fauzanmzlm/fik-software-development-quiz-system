<x-app-layout>
    <style>
        /* Card Design with Gradient Background */
        .quiz-card {
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.9), rgba(240, 240, 240, 0.7));
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .quiz-card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }

        /* Gradient Border on Hover */
        .quiz-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(45deg, #6ee7b7, #3b82f6);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        .quiz-card:hover::before {
            opacity: 1;
        }

        /* Styling for Card Content */
        .quiz-card-content {
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Quiz Title Styling */
        .quiz-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1f2937;
            position: relative;
        }

        .quiz-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 50px;
            height: 3px;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }

        .quiz-title:hover::after {
            width: 100%;
        }

        /* Icon Style */
        .icon {
            margin-right: 8px;
            color: #3b82f6;
            width: 20px;
            height: 20px;
        }

        /* Beautiful Take Quiz Button */
        .take-quiz-btn {
            background: linear-gradient(90deg, #34d399, #3b82f6);
            color: white;
            padding: 10px 16px;
            border-radius: 8px;
            font-size: 1rem;
            text-align: center;
            transition: background 0.3s ease;
        }

        .take-quiz-btn:hover {
            background: linear-gradient(90deg, #3b82f6, #34d399);
        }

        /* General Card Grid Setup */
        .quiz-card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 24px;
        }

        @media (min-width: 640px) {
            .quiz-card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .quiz-card-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Container with unique namespace */
        .myapp-label-badge-container {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Label with unique namespace */
        .myapp-label {
            font-size: 14px;
            color: #333;
            font-family: Arial, sans-serif;
        }

        /* Badge with unique namespace */
        .myapp-badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            font-size: 10px;
            font-weight: bold;
            color: #fff;
            background-color: #ff8000;
            /* Badge color */
            border-radius: 6px;
            min-width: 20px;
            text-align: left;
            font-family: Arial, sans-serif;
            /* Overflow : Long Course Name */
            white-space: nowrap;
            overflow: hidden;
        }
    </style>

    <!-- Welcome Section -->
    <div class="py-6 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900">
            Welcome, {{ Auth::user() ? Auth::user()->name : 'Guest' }}!
        </h2>
        <p class="mt-2 text-gray-600">Explore and enjoy our curated quizzes below.</p>
    </div>

    <!-- Section: Public Quizzes -->
    <div class="py-6 public-quizzes">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h6 class="text-3xl font-bold mb-4">Public Quizzes ({{ count($public_quizzes) }})</h6>
                <div class="quiz-card-grid">
                    @forelse($public_quizzes as $quiz)
                        <div class="quiz-card">
                            <div class="quiz-card-content">
                                <div>
                                    <h3 class="quiz-title">
                                        <div class="myapp-label-badge-container">
                                            <span class="myapp-badge">{{ $quiz->subject->name }}</span>
                                        </div>
                                        <div>
                                            <a href="{{ route('quiz.show', $quiz->slug) }}">{{ $quiz->title }}</a>
                                        </div>
                                    </h3>
                                    <p class="flex items-center text-sm text-gray-500 mt-2">
                                        {{-- <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M9 16h6M4 6h16M4 12h16M4 18h16"></path>
                                        </svg> --}}
                                        Questions: <span>{{ $quiz->questions_count }}</span>
                                    </p>
                                    <p class="text-sm text-gray-600 mt-1">{{ Str::limit($quiz->description, 100) }}</p>
                                </div>
                                <div class="mt-4">
                                    <a href="{{ route('quiz.show', $quiz->slug) }}" class="take-quiz-btn">Take Quiz</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full mt-4 text-gray-500">No public quizzes found.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>



    <!-- Section: Registered User Quizzes -->
    <div class="py-6 registered-quizzes">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h6 class="text-3xl font-bold mb-4">Quizzes for Registered Users ({{ count($registered_only_quizzes) }})
                </h6>
                <div class="quiz-card-grid">
                    @forelse($registered_only_quizzes as $quiz)
                        <div class="quiz-card">
                            <div class="quiz-card-content">
                                <div>
                                    <h3 class="quiz-title">
                                        <div class="myapp-label-badge-container">
                                            <span class="myapp-badge">{{ $quiz->subject->name }}</span>
                                        </div>
                                        <div>
                                            <a href="{{ route('quiz.show', $quiz->slug) }}">{{ $quiz->title }}</a>
                                        </div>
                                    </h3>
                                    <p class="flex items-center text-sm text-gray-500 mt-2">
                                        {{-- <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M9 16h6M4 6h16M4 12h16M4 18h16"></path>
                                        </svg> --}}
                                        Questions: <span>{{ $quiz->questions_count }}</span>
                                    </p>
                                    <p class="text-sm text-gray-600 mt-1">{{ Str::limit($quiz->description, 100) }}</p>
                                </div>
                                <div class="mt-4">
                                    <a href="{{ route('quiz.show', $quiz->slug) }}" class="take-quiz-btn">Take Quiz</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full mt-4 text-gray-500">No quizzes for registered users found.</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
