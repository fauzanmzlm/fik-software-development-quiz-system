<?php

namespace App\Http\Livewire\Quiz;

use App\Models\Quiz;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class QuizList extends Component
{
    public function delete($quiz_id)
    {
        abort_if(auth()->user()->role !== User::ROLE_EDUCATOR, Response::HTTP_FORBIDDEN, 403);

        Quiz::find($quiz_id)->delete();
    }

    public function render(): View
    {
        $quizzes = Quiz::withCount('questions')->latest()->paginate();

        return view('livewire.quiz.quiz-list', compact('quizzes'));
    }
}
