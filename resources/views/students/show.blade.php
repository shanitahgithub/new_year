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
@endsection