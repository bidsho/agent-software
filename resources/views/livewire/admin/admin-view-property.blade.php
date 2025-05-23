<div class="container mt-4">
    <h2 class="mb-4">All Properties</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Type</th>
                <th>Status</th>
                <th>User</th>
                <th>Cover Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($properties as $property)
                <tr>
                    <td>{{ $property->title }}</td>
                    <td>₦{{ number_format($property->price) }}</td>
                    <td>{{ ucfirst($property->type) }}</td>
                    <td>{{ ucfirst($property->status) }}</td>
                    <td>{{ $property->user->name ?? 'N/A' }}</td>
                    <td>
                        @if($property->cover_image)
                            <img src="{{ asset('storage/' . $property->cover_image) }}" width="60">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.property.show', $property->id) }}" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
