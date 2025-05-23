<div class="container py-5">
    <h3 class="mb-4">User Settings</h3>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Profile Update --}}
    <form wire:submit.prevent="updateProfile" class="card p-4 shadow-sm mb-4">
        <h5 class="mb-3">Update Profile</h5>

        <div class="mb-3">
            <label class="form-label">Full Name</label>
            <input wire:model.defer="name" type="text" class="form-control">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input wire:model.defer="email" type="email" class="form-control">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input wire:model.defer="phone_number" type="text" class="form-control">
            @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Location</label>
            <input wire:model.defer="location" type="text" class="form-control">
            @error('location') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-primary">Save Changes</button>
    </form>

    {{-- Password Update --}}
    <form wire:submit.prevent="updatePassword" class="card p-4 shadow-sm">
        <h5 class="mb-3">Change Password</h5>

        <div class="mb-3">
            <label class="form-label">Current Password</label>
            <input wire:model.defer="current_password" type="password" class="form-control">
            @error('current_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">New Password</label>
            <input wire:model.defer="new_password" type="password" class="form-control">
            @error('new_password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Confirm New Password</label>
            <input wire:model.defer="new_password_confirmation" type="password" class="form-control">
        </div>

        <button class="btn btn-warning">Update Password</button>
    </form>
</div>
