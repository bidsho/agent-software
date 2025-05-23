<?php

namespace App\Livewire\Admin;

use App\Models\Property;
use Livewire\Component;

class AdminShowProperty extends Component
{
    public $property;

    public function mount($id)
    {
        $this->property = Property::with('user', 'images')->findOrFail($id);
    }

    public function render()
    {
        return view('livewire.admin.admin-show-property')->extends('components.layouts.admin');
    }
}
