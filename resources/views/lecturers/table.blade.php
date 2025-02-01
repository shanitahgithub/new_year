{{-- <table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>

            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lecturers as $key => $lecturer)
        <tr>

            <td>{{ $lecturer->name }}</td>
            <td>{{ $lecturer->email }}</td>
            <td>{{ $lecturer->phone_number }}</td>
            <td>{{ $lecturer->gender ?? 'N/A' }}</td>
            <td>{{ $lecturer->position ?? 'N/A' }}</td>
            <td>{{ $lecturer->status ?? 'N/A' }}</td>



            <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table> --}}


<div class="table-responsive">
    <table class="table table-striped table-bordered" id="lecturers-table">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lecturers as $lecturer)
            <tr>
                <td>{{ $lecturer->name }}</td>
                <td>{{ $lecturer->email }}</td>
                <td>{{ $lecturer->phone_number }}</td>
                <td>{{ $lecturer->gender ?? 'N/A' }}</td>
                <td>{{ $lecturer->position ?? 'N/A' }}</td>
                <td>
                    @if ($lecturer->status == 'active')
                    <span class="badge bg-success text-white">{{ ucfirst($lecturer->status) }}</span>
                    @elseif ($lecturer->status == 'inactive')
                    <span class="badge bg-danger text-white">{{ ucfirst($lecturer->status) }}</span>
                    @else
                    <span class="badge bg-secondary text-white">{{ ucfirst($lecturer->status) }}</span>
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-light btn-sm"><i
                            class="fa fa-eye"></i></a>
                    <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm"><i
                            class="fa fa-edit"></i></a>
                    <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#lecturers-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50]
        });
    });
</script>