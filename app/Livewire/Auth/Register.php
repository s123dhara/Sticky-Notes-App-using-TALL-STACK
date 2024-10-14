<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Register extends Component
{

    
    #[Title('Register')]
    #[Layout('components.layouts.auth')]

    public $username, $email, $password, $password_confirmation;


    public function render()
    {
        return view('livewire.auth.register');
    }


    public function register() {
        $validate  = $this->validate([
            "username" => "required|min:2|max:30",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:6|max:40|confirmed",
        ]);

        $validate["password"] = Hash::make($validate['password']);
        User::create($validate);
        session()->flash("success", "Account Created Successfully");
        $this->redirect('login', navigate:true);
    }
}
