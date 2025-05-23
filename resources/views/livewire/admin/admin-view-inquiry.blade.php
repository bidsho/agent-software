<div class="container mt-4">
    <h2 class="mb-4">All Property Inquiries</h2>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Property Title</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($inquiries as $index => $inquiry)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $inquiry->property->title ?? 'N/A' }}</td>
                    <td>{{ $inquiry->user->name ?? 'N/A' }}</td>
                    <td>{{ $inquiry->user->email ?? 'N/A' }}</td>
                    <td>{{ $inquiry->message }}</td>
                    <td>{{ $inquiry->created_at->format('d M, Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">No inquiries found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
