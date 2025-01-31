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
            Application ID: {{ $studentApplication->id }}
        </div>
        <div class="card-body">
            <p><strong>User:</strong> {{ $studentApplication->user->name }}</p>
            <p><strong>Date of Birth:</strong> {{ $studentApplication->date_of_birth }}</p>
            <p><strong>Address:</strong> {{ $studentApplication->address }}</p>
            <p><strong>Status:</strong> {{ ucfirst($studentApplication->status) }}</p>
            <p><strong>Program:</strong> {{ $studentApplication->program->name }}</p>
            <p><strong>Points Scored:</strong> {{ $studentApplication->points_scored }}</p>
            <p><strong>Secondary School:</strong> {{ $studentApplication->secondary_school }}</p>
            <p><strong>Guardian Name:</strong> {{ $studentApplication->guardian_name }}</p>
            <p><strong>Guardian Contact:</strong> {{ $studentApplication->guardian_contact }}</p>
            <p><strong>Nationality:</strong> {{ $studentApplication->nationality }}</p>
            <p><strong>Combination:</strong> {{ $studentApplication->combination }}</p>
            <p><strong>Interview Date:</strong> {{ $studentApplication->interview_date ?? 'N/A' }}</p>
            <p><strong>Interview Result:</strong> {{ ucfirst($studentApplication->interview_result) }}</p>
            <p><strong>Submitted Documents:</strong> {{ json_decode($studentApplication->submitted_documents) }}</p>
            <p><strong>UACE Year of Completion:</strong> {{ $studentApplication->uace_year_of_completion ?? 'N/A' }}</p>
        </div>
    </div>

    <a href="{{ route('student_applications.index') }}" class="btn btn-secondary mt-3">Back to Applications List</a>
</div>
@endsection