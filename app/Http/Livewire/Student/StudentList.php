<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Livewire\Component;

class StudentList extends Component
{
    public function delete(User $educator)
    {
        abort_if(auth()->user()->role !== User::ROLE_ADMIN, Response::HTTP_FORBIDDEN, 403);

        $educator->delete();
    }

    public function render(): View
    {
        $students = User::student()->paginate();

        return view('livewire.student.student-list', [
            'students' => $students
        ]);
    }
}
