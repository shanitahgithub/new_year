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

    <div class="table-responsive"> <!-- Scrollable table container -->
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
                            <div class="d-flex"> <!-- Horizontal alignment for action buttons -->
                                <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                                <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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

    @if(session('success'))
        <div id="success-message" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('lecturers.create') }}" class="btn btn-primary mb-3">Add Lecturer</a>

    <div class="table-responsive"> <!-- Scrollable table container -->
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
                            <div class="d-flex"> <!-- Horizontal alignment for action buttons -->
                                <a href="{{ route('lecturers.show', $lecturer->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                                <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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

@section('scripts')
    <script>
        // Auto dismiss success message after 20 seconds
        setTimeout(function() {
            let successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, ); // 20 seconds
    </script>
@endsection
@endsection
