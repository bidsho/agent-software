<?php

namespace App\Livewire\Admin;

use App\Models\Inquiry;
use Livewire\Component;

class AdminViewInquiry extends Component
{
    public function render()
    {
        $inquiries = Inquiry::with('user', 'property')->latest()->get();

        return view('livewire.admin.admin-view-inquiry', [
            'inquiries' => $inquiries,
        ])->extends('components.layouts.admin');
    }
}
