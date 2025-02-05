{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Applications</h1>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <a href="{{ route('student_applications.create') }}" class="btn btn-primary">Create New Application</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Program</th>
                        <th>Points Scored</th>
                        <th>Secondary School</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Guardian Name</th>
                        <th>Guardian Contact</th>
                        <th>Nationality</th>
                        <th>Interview Date</th>
                        <th>Interview Result</th>
                        <th>Submitted Documents</th>
                        <th>Combination</th>
                        <th>UACE Year of Completion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applications as $application)
                    <tr>
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->user->name }}</td>
                        <td>{{ ucfirst($application->status) }}</td>
                        <td>{{ $application->program->name }}</td>
                        <td>{{ $application->points_scored }}</td>
                        <td>{{ $application->secondary_school }}</td>
                        <td>{{ $application->date_of_birth }}</td>
                        <td>{{ $application->address }}</td>
                        <td>{{ $application->guardian_name }}</td>
                        <td>{{ $application->guardian_contact }}</td>
                        <td>{{ $application->nationality }}</td>
                        <td>{{ $application->interview_date }}</td>
                        <td>{{ ucfirst($application->interview_result) }}</td>
                        <td>{{ $application->submitted_documents }}</td>
                        <td>{{ $application->combination }}</td>
                        <td>{{ $application->uace_year_of_completion }}</td>
                        <td>
                            <a href="{{ route('student_applications.show', $application->id) }}"
                                class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('student_applications.edit', $application->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('student_applications.destroy', $application->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this application?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')
@section('title')
Student Applications
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>Student Applications</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('student_applications.create')}}" class="btn btn-primary form-btn"> Add Student
                Application <i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-body">
                @include('student_applications.table')
            </div>
        </div>
    </div>

</section>
@endsection