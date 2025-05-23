<?php

namespace App\Livewire\Home;

use Livewire\Component;

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.home.about-us')->extends('components.layouts.home');
    }
}
