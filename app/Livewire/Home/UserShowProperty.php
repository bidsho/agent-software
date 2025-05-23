<?php

namespace App\Livewire\Home;

use App\Models\Property;
use Livewire\Component;

class UserShowProperty extends Component
{
    public $property;
    public $status;

    public function mount($id)
    {
        $this->property = Property::with('user', 'images')->findOrFail($id);
        $this->status = $this->property->status;
    }

    public function updateStatus()
    {
        $this->validate([
            'status' => 'required|in:available,sold,pending', // allowed statuses
        ]);

        $this->property->status = $this->status;
        $this->property->save();

        session()->flash('success', 'Property status updated successfully!');
    }

    public function render()
    {
        return view('livewire.home.user-show-property')->extends('components.layouts.home');
    }
}
