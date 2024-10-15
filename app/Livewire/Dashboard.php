<?php

namespace App\Livewire;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Attributes\Lazy;

class Dashboard extends Component
{
    use WithPagination;

    #[Title('Dashboard')]
    #[Url]
    public $search = '';

    public function render()
    {
        // Get the authenticated user
        $user = Auth::guard('web')->user();
        // Handle the case when the user is not authenticated
        if (!$user) {
            return redirect()->route('login'); // Redirect to the login page
        }

        $files = Files::select('*')->where('user_id', $user->id)->where('title', 'like', '%' . $this->search . '%')->orderBy('id', 'desc')->cursorPaginate(20);

        // Render the view with files
        return view('livewire.dashboard', ['files' => $files]);
    }
}
