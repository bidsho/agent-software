<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Property;
use Illuminate\Support\Facades\Auth;

class UserViewProperty extends Component
{
    public function render()
    {
        $properties = Property::where('user_id',Auth::user()->id)->with('user', 'images')->latest()->get();

        return view('livewire.home.user-view-property', [
            'properties' => $properties,
        ])->extends('components.layouts.home');
    }
    
}
