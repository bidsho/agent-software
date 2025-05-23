<div class="container py-4">
    <h1 class="h4 mb-4">All Users</h1>

    <div class="mb-3">
        <input type="text" wire:model.debounce.300ms="search" class="form-control" placeholder="Search users...">
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center">
            <thead class="table-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="text-start">Name</th>
                    <th scope="col" class="text-start">Email</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td class="text-start">{{ $user->name }}</td>
                        <td class="text-start">{{ $user->email }}</td>
                        <td>
                            <button wire:click="deleteUser({{ $user->id }})" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                            {{-- You can add more actions here like Edit or View --}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No users found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $users->links() }}
    </div>
</div>
