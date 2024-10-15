<?php

namespace App\Livewire\Files;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\Files;
use Illuminate\Support\Facades\Auth;

class DeleteFile extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }
    public function render()
    {
        return view('livewire.files.deletefile');
    }

    public function delete()
    {
        try {
            $file = Files::find($this->id);
            $userId = Auth::guard('web')->user()->id;

            if ($file->user_id != $userId) {
                session()->flash("error", "Something went wrong!");
                return $this->redirectRoute("dashboard");
            }

            // Delete file from storage
            Storage::delete($file->image);

            // Delete file record from database
            $file->delete();

            session()->flash("success", "File deleted successfully!");
            return $this->redirectRoute("dashboard", navigate:true);
        } catch (\Exception $err) {
            session()->flash("error", "Something went wrong! Exception occurred.");
            return $this->redirectRoute("dashboard", navigate:true);
        }
    }
}
