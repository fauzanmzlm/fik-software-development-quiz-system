<?php

namespace App\Http\Livewire\Front;

use App\Models\Quiz;
use App\Models\Test;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render(): View
    {
        // Fetching counts for different roles
        $numberOfStudents = User::where('role', User::ROLE_STUDENT)->count();
        $numberOfEducators = User::where('role', User::ROLE_EDUCATOR)->count();
        $numberOfQuizzes = Quiz::count();

        // Calculate average performance of all tests taken
        $averagePerformance = Test::average('result');

        // Fetch the top 10 attempted quizzes
        $topQuizzes = Quiz::withCount('tests') // Assuming a 'tests' relationship exists
            ->orderBy('tests_count', 'desc')
            ->take(10)
            ->get();

        return view('livewire.front.dashboard', [
            'numberOfStudents' => $numberOfStudents,
            'numberOfEducators' => $numberOfEducators,
            'numberOfQuizzes' => $numberOfQuizzes,
            'averagePerformance' => $averagePerformance,
            'topQuizzes' => $topQuizzes,
        ]);
    }
}
