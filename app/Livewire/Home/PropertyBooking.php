<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Property;
use App\Models\Inquiry;
use App\Mail\PropertyInquiryMail;
use Illuminate\Support\Facades\Mail;

class PropertyBooking extends Component
{
    public $property;
    public $full_name;
    public $email;
    public $phone_number;
    public $message;
    public $user_id;

    public function mount($id)
    {
        $this->property = Property::with('images', 'user')->findOrFail($id);
        $this->user_id = $this->property->user->id; // ✅ Set user_id here
    }

    public function submit()
    {
        $this->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'message' => 'required|string',
        ]);

       $inquiry= Inquiry::create([
            'property_id' => $this->property->id,
            'visitor_full_name' => $this->full_name,
            'visitor_email' => $this->email,
            'user_id' => $this->user_id,
            'visitor_phone_number' => $this->phone_number,
            'message' => $this->message,
        ]);
        // Send email to visitor
        Mail::to($this->email)->send(new PropertyInquiryMail($inquiry, 'visitor'));

        // Send email to property owner
        Mail::to($this->property->user->email)->send(new PropertyInquiryMail($inquiry, 'user'));

        session()->flash('success', 'Your inquiry has been submitted successfully!');
        $this->reset(['full_name', 'email', 'phone_number', 'message']);
    }

    public function render()
    {
        return view('livewire.home.property-booking')->extends('components.layouts.home');
    }
}
