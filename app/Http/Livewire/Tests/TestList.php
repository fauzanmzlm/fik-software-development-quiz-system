<?php

namespace App\Http\Livewire\Tests;

use App\Models\Quiz;
use App\Models\Test;
use App\Models\User;
use Illuminate\Support\Collection;
use Livewire\Component;

class TestList extends Component
{
    public Collection $quizzes;

    public int $quiz_id = 0;

    public function mount()
    {
        if (auth()->user()->role == User::ROLE_ADMIN) {
            $this->quizzes = Quiz::published()->get();
        } else {
            $this->quizzes = Quiz::published()->where('user_id', auth()->user()->id)->get();
        }
    }

    public function render()
    {
        if (auth()->user()->role == User::ROLE_ADMIN) {
            $tests = Test::when($this->quiz_id > 0, function ($query) {
                $query->where('quiz_id', $this->quiz_id);
            })
            ->with(['user', 'quiz'])
            ->withCount('questions')
            ->latest()
            ->paginate();
        } else {
            $tests = Test::when($this->quiz_id > 0, function ($query) {
                $query->where('quiz_id', $this->quiz_id);
            })
                ->whereHas('quiz', function ($query) {
                    $query->where('user_id', auth()->id()); // Filter by the current user's ID
                })
                ->with(['user', 'quiz'])
                ->withCount('questions')
                ->latest()
                ->paginate();
        }

        return view('livewire.educator.tests.test-list', [
            'tests' => $tests
        ]);
    }
}
