<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Create New Property</h2>
        <a href="{{ url('home/user-view-property') }}" class="btn btn-outline-secondary">View My Properties</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form wire:submit.prevent="save" enctype="multipart/form-data" class="card shadow-sm p-4 rounded">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Title</label>
                <input wire:model.defer="title" type="text" class="form-control @error('title') is-invalid @enderror">
                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Price (₦)</label>
                <input wire:model.defer="price" type="number" class="form-control @error('price') is-invalid @enderror">
                @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" rows="4"></textarea>
            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Type</label>
                <select wire:model.defer="type" class="form-select @error('type') is-invalid @enderror">
                    <option value="">-- Select Type --</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="land">Land</option>
                </select>
                @error('type') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Status</label>
                <select wire:model.defer="status" class="form-select @error('status') is-invalid @enderror">
                    <option value="available">Available</option>
                    <option value="sold">Sold</option>
                    <option value="rented">Rented</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Cover Image</label>
            <input wire:model="cover_image" type="file" class="form-control @error('cover_image') is-invalid @enderror">
            @error('cover_image') <div class="invalid-feedback">{{ $message }}</div> @enderror

            @if ($cover_image)
                <div class="mt-2">
                    <img src="{{ $cover_image->temporaryUrl() }}" class="img-thumbnail" width="180">
                </div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Additional Property Images</label>
            <input wire:model="property_images" type="file" multiple class="form-control @error('property_images.*') is-invalid @enderror">
            @error('property_images.*') <div class="invalid-feedback">{{ $message }}</div> @enderror

            <div class="mt-3 d-flex flex-wrap gap-2">
                @foreach ($property_images as $image)
                    <img src="{{ $image->temporaryUrl() }}" width="100" class="img-thumbnail rounded">
                @endforeach
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Create Property</button>
        </div>
    </form>
</div>
