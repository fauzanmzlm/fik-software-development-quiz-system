<?php

namespace App\Http\Livewire\Question;

use App\Models\Question;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class QuestionList extends Component
{
    public function delete(Question $question)
    {
        abort_if(auth()->user()->role !== User::ROLE_EDUCATOR, Response::HTTP_FORBIDDEN, 403);

        $question->delete();
    }

    public function render(): View
    {
        $questions = Question::where('user_id', auth()->user()->id)->latest()->paginate();

        return view('livewire.question.qusetion-list', compact('questions'));
    }
}
