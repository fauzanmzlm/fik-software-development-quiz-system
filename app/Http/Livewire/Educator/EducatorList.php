<?php

namespace App\Http\Livewire\Educator;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Livewire\Component;

class EducatorList extends Component
{
    public function delete(User $educator)
    {
        abort_if(auth()->user()->role !== User::ROLE_ADMIN, Response::HTTP_FORBIDDEN, 403);

        $educator->delete();
    }

    public function render(): View
    {
        $educators = User::admin()->paginate();

        return view('livewire.educator.educator-list', [
            'educators' => $educators
        ]);
    }
}
