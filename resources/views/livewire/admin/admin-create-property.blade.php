<div class="container mt-5">
    <h2 class="mb-4">Create Property</h2>

    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input wire:model="title" type="text" class="form-control">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea wire:model="description" class="form-control"></textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Price (₦)</label>
            <input wire:model="price" type="number" class="form-control">
            @error('price') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select wire:model="type" class="form-control">
                <option value="">-- Select --</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
                <option value="land">Land</option>
            </select>
            @error('type') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select wire:model="status" class="form-control">
                <option value="available">Available</option>
                <option value="sold">Sold</option>
                <option value="rented">Rented</option>
            </select>
            @error('status') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Cover Image</label>
            <input wire:model="cover_image" type="file" class="form-control">
            @error('cover_image') <small class="text-danger">{{ $message }}</small> @enderror

            @if ($cover_image)
                <img src="{{ $cover_image->temporaryUrl() }}" width="150" class="mt-2 rounded">
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Additional Property Images</label>
            <input wire:model="property_images" type="file" class="form-control" multiple>
            @error('property_images.*') <small class="text-danger">{{ $message }}</small> @enderror

            <div class="mt-2 d-flex flex-wrap gap-2">
                @foreach ($property_images as $image)
                    <img src="{{ $image->temporaryUrl() }}" width="100" class="rounded">
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Create Property</button>
    </form>
</div>
