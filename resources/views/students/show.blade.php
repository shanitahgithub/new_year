{{--
<!-- resources/views/students/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    <div>
        <strong>Reg Number:</strong> {{ $student->reg_number }}<br>
        <strong>Name:</strong> {{ $student->user->name }}<br>
        <strong>Status:</strong> {{ $student->status }}<br>
        <strong>Cohort:</strong> {{ $student->cohort->name }}<br>
        <strong>Admission Date:</strong> {{ $student->admission_date->toFormattedDateString() }}<br>
    </div>
    <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to Index</a>
</div>
@endsection --}}

<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Student Details</h4>
    <div class="card shadow-sm">
        {{-- <div class="card-header bg-primary text-white"> --}}

            {{--
        </div> --}}
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Student Name</th>
                    <td>{{ $student->user->first_name }} {{ $student->user->last_name }}</td>
                </tr>
                <tr>
                    <th>Reg Number</th>
                    <td>{{ $student->reg_number }}</td>
                </tr>
                <tr>
                    <th>Admission Date</th>
                    <td>{{ \Carbon\Carbon::parse($student->admission_date)->format('d M Y') }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if ($student->status == 'dropped')
                        <span class="badge badge-danger">{{ ucfirst($student->status) }}</span>
                        @elseif ($student->status == 'graduated')
                        <span class="badge badge-success">{{ ucfirst($student->status) }}</span>
                        @elseif ($student->status == 'active')
                        <span class="badge badge-warning">{{ ucfirst($student->status) }}</span>
                        @else
                        <span class="badge badge-secondary">{{ ucfirst($student->status) }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Cohort</th>
                    <td>{{ $student->cohort->name }}</td>
                </tr>
                <tr>
                    <th>Created By</th>
                    <td>{{ Auth::user()->first_name }}</td>
                </tr>
                <tr>
                    <th>Student Application ID</th>
                    <td>{{ $student->student_application_id }}</td>
                </tr>
            </table>

            <div class="text-center mt-3">
                <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection