<div class="container mt-4">
    <h2 class="mb-3">{{ $property->title }}</h2>

    <div class="mb-4">
        <strong>Description:</strong>
        <p>{{ $property->description }}</p>
        <strong>Price:</strong> ₦{{ number_format($property->price) }}<br>
        <strong>Type:</strong> {{ ucfirst($property->type) }}<br>
        <strong>Status:</strong> {{ ucfirst($property->status) }}<br>
        <strong>Posted by:</strong> {{ $property->user->name ?? 'N/A' }}
    </div>

    <div class="mb-4">
        <strong>Cover Image:</strong><br>
        @if($property->cover_image)
            <img src="{{ asset('storage/' . $property->cover_image) }}" width="200">
        @else
            No Cover Image
        @endif
    </div>

    <div>
        <strong>Property Images:</strong>
        <div class="d-flex gap-2 flex-wrap mt-2">
            @forelse ($property->images as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" width="150" class="rounded">
            @empty
                <p>No additional images.</p>
            @endforelse
        </div>
    </div>
</div>
