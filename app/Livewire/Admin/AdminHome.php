<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Inquiry;
use App\Models\Property;
use App\Models\User;

class AdminHome extends Component
{
    
    public $totalInquiry;
    public $totalProperty;
    public $totalUsers;
   

    public function mount()
    {
        $this->totalInquiry = Inquiry::count();
        $this->totalProperty = Property::count();
        $this->totalUsers = User::where('role','user')->count();
    
    }

    public function render()
    {
        return view('livewire.admin.admin-home')->extends('components.layouts.admin');
    }
}
