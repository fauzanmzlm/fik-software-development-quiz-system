<?php

namespace App\Http\Livewire\Educator;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class EducatorForm extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'password' => 'required|string|min:6',
    ];

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => User::ROLE_EDUCATOR,
        ]);

        session()->flash('message', 'Saved.');
        return to_route('educators');
    }

    public function render(): View
    {
        return view('livewire.educator.educator-form');
    }
}
