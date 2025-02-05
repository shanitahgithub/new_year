{{--


@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Lecturers</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <a href="{{ route('lecturers.create') }}" class="btn btn-primary mb-3">Add Lecturer</a>

    <div class="table-responsive">
        <!-- Scrollable table container -->
        <table class="table table-bordered">
            <thead class="thead-light">
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
                @forelse($lecturers as $index => $lecturer)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->phone_number }}</td>
                    <td>{{ $lecturer->gender }}</td>
                    <td>{{ $lecturer->position }}</td>
                    <td>
                        <!-- Highlight status with green background and white text -->
                        <span class="badge bg-success text-white">{{ $lecturer->status }}</span>
                    </td>
                    <td>{{ $lecturer->supervised_students }}</td>
                    <td>{{ $lecturer->social_links }}</td>
                    <td>{{ $lecturer->office_hours }}</td>
                    <td>
                        <div class="d-flex">
                            <!-- Horizontal alignment for action buttons -->
                            <a href="{{ route('lecturers.show', $lecturer->id) }}"
                                class="btn btn-info btn-sm mr-2">View</a>
                            <a href="{{ route('lecturers.edit', $lecturer->id) }}"
                                class="btn btn-warning btn-sm mr-2">Edit</a>
                            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST"
                                class="d-inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="11" class="text-center">No lecturers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div> <!-- End Scrollable table container -->
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Lecturers</h2>

    {{-- @if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif --}}


    <a href="{{ route('lecturers.create') }}" class="btn btn-primary mb-3">Add Lecturer</a>

    <!-- Bulk Delete Form -->
    <form id="bulkDeleteForm" method="POST" action="{{ route('lecturers.bulkDelete') }}">
        @csrf
        @method('DELETE')
        <div class="table-responsive">
            <table id="lecturerTable" class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>
                            <input type="checkbox" id="selectAll">
                        </th>
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
                    @forelse($lecturers as $lecturer)
                    <tr>
                        <td>
                            <input type="checkbox" name="ids[]" value="{{ $lecturer->id }}" class="selectRow">
                        </td>
                        <td>{{ $lecturer->name }}</td>
                        <td>{{ $lecturer->email }}</td>
                        <td>{{ $lecturer->phone_number }}</td>
                        <td>{{ $lecturer->gender }}</td>
                        <td>{{ $lecturer->position }}</td>
                        <td>
                            <span class="badge bg-success text-white">{{ $lecturer->status }}</span>
                        </td>
                        <td>
                            <div class="d-flex">
                                {{-- <a href="{{ route('lecturers.show', $lecturer->id) }}"
                                    class="btn btn-info btn-sm mr-2">View</a>
                                <a href="{{ route('lecturers.edit', $lecturer->id) }}"
                                    class="btn btn-warning btn-sm mr-2">Edit</a> --}}
                                <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-light btn-sm"><i
                                        class="fa fa-eye"></i></a>
                                <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm"><i
                                        class="fa fa-edit"></i></a>
                                <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST"
                                    class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">No lecturers found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <button type="submit" class="btn btn-danger" id="bulkDeleteBtn" disabled>Bulk Delete</button>
    </form>
</div>

@section('scripts')
<script>
    // Auto dismiss success message after 20 seconds
    setTimeout(function() {
        let successMessage = document.getElementById('success-message');
        if (successMessage) {
            successMessage.style.display = 'none';
        }
    }, 20000); // 20 seconds

    // Toggle select all checkboxes
    document.getElementById('selectAll').addEventListener('change', function() {
        let checkboxes = document.querySelectorAll('.selectRow');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;
        });
        toggleBulkDeleteButton();
    });

    // Enable or disable the bulk delete button based on selected checkboxes
    document.querySelectorAll('.selectRow').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            toggleBulkDeleteButton();
        });
    });

    function toggleBulkDeleteButton() {
        let selectedCount = document.querySelectorAll('.selectRow:checked').length;
        let bulkDeleteBtn = document.getElementById('bulkDeleteBtn');
        bulkDeleteBtn.disabled = selectedCount === 0;
    }

    // Initialize DataTable
    $(document).ready(function() {
        $('#lecturerTable').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50]
        });
    });
</script>
@endsection
@endsection