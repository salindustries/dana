<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Validation\ValidationException;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'

    ];

    public function render()
    {
        $page_title = 'Login';
        return view('livewire.auth.login', compact('page_title'));
    }

    public function mount()
    {
        $this->fill(['email' => 'admin@material.com', 'password' => 'secret']);
    }

    public function store()
    {
        $attributes = $this->validate();

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();

        return redirect('laravel-examples/user-profile');
    }
}
