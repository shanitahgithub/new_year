<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
            <th>Supervised Students</th>
            <th>Social Links</th>
            <th>Office Hours</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lecturers as $key => $lecturer)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $lecturer->name }}</td>
                <td>{{ $lecturer->email }}</td>
                <td>{{ $lecturer->phone_number }}</td>
                <td>{{ $lecturer->gender ?? 'N/A' }}</td>
                <td>{{ $lecturer->position ?? 'N/A' }}</td>
                <td>{{ $lecturer->status ?? 'N/A' }}</td>
                <td>{{ $lecturer->supervised_students ?? 'N/A' }}</td>
                <td>
                    @if($lecturer->social_links)
                        <a href="{{ $lecturer->social_links }}" target="_blank">View</a>
                    @else
                        N/A
                    @endif
                </td>
                <td>{{ $lecturer->office_hours ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
