{{-- @extends('layouts.app')

@section('content')
<h1>Student Application Details</h1>
<p><strong>ID:</strong> {{ $application->id }}</p>
<p><strong>User:</strong> {{ $application->user->name }}</p>
<p><strong>Program:</strong> {{ $application->program->name }}</p>
<p><strong>Nationality:</strong> {{ $application->nationality }}</p>
<p><strong>Guardian:</strong> {{ $application->guardian_name }}</p>
<p><strong>Points Scored:</strong> {{ $application->points_scored }}</p>
<p><strong>Status:</strong> {{ $application->status }}</p>

<a href="{{ route('student-applications.index') }}">Back to List</a>
<a href="{{ route('student-applications.edit', $application->id) }}">Edit</a>
<form action="{{ route('student-applications.destroy', $application->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
</form>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Application Details</h1>

    <div class="card">
        <div class="card-header">
            Application ID: {{ $application->id }}
        </div>
        <div class="card-body">
            <p><strong>First name:</strong> {{ $application->firstname }}</p>
            <p><strong>Last name:</strong> {{ $application->lastname }}</p>
            <p><strong>Email:</strong> {{ $application->email }}</p>
            <p><strong>Phone number:</strong> {{ $application->phone_number }}</p>
            <p><strong>Gender:</strong> {{ $application->gender }}</p>
            <p><strong>Date of Birth:</strong> {{ $application->date_of_birth }}</p>
            <p><strong>Address:</strong> {{ $application->address }}</p>
            <p><strong>Status:</strong> {{ ucfirst($application->status) }}</p>
            <p><strong>Program:</strong> {{ $application->program->name }}</p>
            <p><strong>Points Scored:</strong> {{ $application->points_scored }}</p>
            <p><strong>Secondary School:</strong> {{ $application->secondary_school }}</p>
            <p><strong>Guardian Name:</strong> {{ $application->guardian_name }}</p>
            <p><strong>Guardian Contact:</strong> {{ $application->guardian_contact }}</p>
            <p><strong>Nationality:</strong> {{ $application->nationality }}</p>
            <p><strong>Combination:</strong> {{ $application->combination }}</p>
            <p><strong>Interview Date:</strong> {{ $application->interview_date ?? 'N/A' }}</p>
            <p><strong>Interview Result:</strong> {{ ucfirst($application->interview_result) }}</p>
            {{-- <p><strong>Uce:</strong> {{ ($application->uce) }}</p> --}}

            <p><strong>Uce:</strong> <img src="{{ asset('storage/' . $application->uce) }}" alt="UCE Certificate"
                    style="width: 200px; height: auto;"></p>

            <p><strong>UACE Year of Completion:</strong> {{ $application->uace_year_of_completion ?? 'N/A' }}</p>
        </div>
    </div>

    <a href="{{ route('student_applications.index') }}" class="btn btn-secondary mt-3">Back to Applications List</a>
</div>
@endsection