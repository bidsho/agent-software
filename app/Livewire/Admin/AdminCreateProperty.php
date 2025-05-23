<?php

namespace App\Livewire\Admin;

use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminCreateProperty extends Component
{
    use WithFileUploads;

    public $title, $description, $price, $type, $status = 'available', $cover_image;
    public $property_images = []; // for multiple images

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'type' => 'required|string|in:apartment,house,land',
            'status' => 'required|string|in:available,sold,rented',
            'cover_image' => 'required|image|max:2048',
            'property_images.*' => 'image|max:2048', // validate each image
        ]);

        $validated['cover_image'] = $this->cover_image->store('properties/covers', 'public');
        $validated['user_id'] = Auth::id();

        $property = Property::create($validated);

        // Save additional images
        if (!empty($this->property_images)) {
            foreach ($this->property_images as $image) {
                $path = $image->store('properties/images', 'public');
                PropertyImage::create([
                    'property_id' => $property->id,
                    'image_path' => $path,
                ]);
            }
        }

        session()->flash('success', 'Property created successfully.');

        // Optionally reset fields
        $this->reset(['title', 'description', 'price', 'type', 'status', 'cover_image', 'property_images']);
    }

    public function render()
    {
        return view('livewire.admin.admin-create-property')->extends('components.layouts.admin');
    }
}
