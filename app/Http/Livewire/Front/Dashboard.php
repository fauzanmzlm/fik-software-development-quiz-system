<?php

namespace App\Http\Livewire\Front;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Dashboard extends Component
{
    public function render(): View
    {
        return view('livewire.front.dashboard');
    }
}
