<div class="container py-5">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">{{ $property->title }}</h3>
            <form wire:submit.prevent="updateStatus" class="d-flex align-items-center gap-2">
                <select wire:model="status" class="form-select form-select-sm w-auto">
                    <option value="available">Available</option>
                    <option value="sold">Sold</option>
                    <option value="pending">Pending</option>
                </select>
                <button type="submit" class="btn btn-sm btn-primary">Update</button>
            </form>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <h5>Description</h5>
                <p class="text-muted">{{ $property->description }}</p>
            </div>

            <div class="row g-3">
                <div class="col-md-4">
                    <strong>Price:</strong>
                    <p>₦{{ number_format($property->price) }}</p>
                </div>
                <div class="col-md-4">
                    <strong>Type:</strong>
                    <p>{{ ucfirst($property->type) }}</p>
                </div>
                <div class="col-md-4">
                    <strong>Status:</strong>
                    <p class="text-capitalize">{{ $status }}</p>
                </div>
                <div class="col-md-4">
                    <strong>Posted By:</strong>
                    <p>{{ $property->user->name ?? 'N/A' }}</p>
                </div>
            </div>

            <div class="mt-4">
                <h5>Cover Image</h5>
                @if($property->cover_image)
                    <img src="{{ asset('storage/' . $property->cover_image) }}" class="img-fluid rounded shadow-sm" style="max-width: 300px;">
                @else
                    <p class="text-muted">No Cover Image</p>
                @endif
            </div>

            <div class="mt-4">
                <h5>Property Images</h5>
                <div class="d-flex flex-wrap gap-3 mt-2">
                    @forelse ($property->images as $image)
                        <img src="{{ asset('storage/' . $image->image_path) }}" class="rounded shadow-sm" width="150">
                    @empty
                        <p class="text-muted">No additional images.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
