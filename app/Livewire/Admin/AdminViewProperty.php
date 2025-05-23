<?php

namespace App\Livewire\Admin;

use App\Models\Property;
use Livewire\Component;

class AdminViewProperty extends Component
{
    public function render()
    {
        $properties = Property::with('user', 'images')->latest()->get();

        return view('livewire.admin.admin-view-property', [
            'properties' => $properties,
        ])->extends('components.layouts.admin');
    }
}
