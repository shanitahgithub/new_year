{{--
<!-- resources/views/students/table.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student List</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Reg Number</th>
                <th>User</th>
                <th>Status</th>
                <th>Cohort</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->reg_number }}</td>
                <td>{{ $student->user->name }}</td>
                <td>{{ $student->status }}</td>
                <td>{{ $student->cohort->name }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to Index</a>
</div>
@endsection --}}

<!-- resources/views/students/table.blade.php -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>User</th>
            <th>Reg Number</th>
            <th>Admission Date</th>
            <th>Status</th>
            <th>Cohort</th>
            <th>Created By</th>
            <th>Student Application ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->user->name }}</td>
            <td>{{ $student->reg_number }}</td>
            <td>{{ \Carbon\Carbon::parse($student->admission_date)->format('d M Y') }}</td>
            <td>{{ ucfirst($student->status) }}</td>
            <td>{{ $student->cohort->name }}</td>
            {{-- <td>{{ $student->creator->first_name }}</td> --}}
            <td>{{ Auth::user()->first_name }}</td>


            <td>{{ $student->student_application_id }}</td>

        </tr>
        @endforeach
    </tbody>
</table>