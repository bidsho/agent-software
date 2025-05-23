<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Property; // Make sure this model exists

class PropertyList extends Component
{
    public function render()
    {
        $properties = Property::latest()->get(); // You can add filters or pagination if needed

        return view('livewire.home.property-list', [
            'properties' => $properties
        ])->extends('components.layouts.home');
    }
}
