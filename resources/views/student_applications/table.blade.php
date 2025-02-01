{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Applications</h1>



    <a href="{{ route('student_applications.create') }}" class="btn btn-primary mb-3">Create New Application</a>

    <div style="overflow-x: auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Program</th>
                    <th>Points Scored</th>
                    <th>Secondary School</th>
                    <th>Guardian Name</th>
                    <th>Guardian Contact</th>
                    <th>Nationality</th>
                    <th>Interview Date</th>
                    <th>Interview Result</th>
                    <th>Submitted Documents</th>
                    <th>Combination</th>
                    <th>UACE Year of Completion</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->user->first_name }} {{ $application->user->last_name }}</td>
                    <td>{{ $application->date_of_birth }}</td>
                    <td>{{ $application->address }}</td>
                    <td>
                        @if ($application->status == 'approved')
                        <span class="badge badge-success">{{ $application->status }}</span>
                        @elseif ($application->status == 'rejected')
                        <span class="badge badge-danger">{{ $application->status }}</span>
                        @elseif ($application->status == 'pending')
                        <span class="badge badge-warning">{{ $application->status }}</span>
                        @else
                        <span class="badge badge-secondary">{{ $application->status }}</span>
                        @endif
                    </td>





                    <td>{{ $application->program->name }}</td>
                    <td>{{ $application->points_scored }}</td>
                    <td>{{ $application->secondary_school }}</td>
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
                            class="btn btn-info">View</a>
                        <a href="{{ route('student_applications.edit', $application->id) }}"
                            class="btn btn-warning">Edit</a>
                        <form action="{{ route('student_applications.destroy', $application->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete this application?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Applications</h1>

    <a href="{{ route('student_applications.create') }}" class="btn btn-primary mb-3">Create New Application</a>

    <div class="table-responsive">
        <table class="table table-bordered" id="student-applications-table">
            <thead>
                <tr>
                    {{-- <th>#</th> --}}
                    <th>User</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Program</th>
                    <th>Points Scored</th>
                    <th>Secondary School</th>
                    <th>Guardian Name</th>
                    <th>Guardian Contact</th>
                    <th>Nationality</th>
                    <th>Interview Date</th>
                    <th>Interview Result</th>
                    <th>Submitted Documents</th>
                    <th>Combination</th>
                    <th>UACE Year of Completion</th>
                    <th colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applications as $application)
                <tr>
                    {{-- <td>{{ $application->id }}</td> --}}
                    <td>{{ $application->user->first_name }} {{ $application->user->last_name }}</td>
                    <td>{{ $application->date_of_birth }}</td>
                    <td>{{ $application->address }}</td>
                    <td>
                        @if ($application->status == 'approved')
                        <span class="badge badge-success">{{ $application->status }}</span>
                        @elseif ($application->status == 'rejected')
                        <span class="badge badge-danger">{{ $application->status }}</span>
                        @elseif ($application->status == 'pending')
                        <span class="badge badge-warning">{{ $application->status }}</span>
                        @else
                        <span class="badge badge-secondary">{{ $application->status }}</span>
                        @endif
                    </td>
                    <td>{{ $application->program->name }}</td>
                    <td>{{ $application->points_scored }}</td>
                    <td>{{ $application->secondary_school }}</td>
                    <td>{{ $application->guardian_name }}</td>
                    <td>{{ $application->guardian_contact }}</td>
                    <td>{{ $application->nationality }}</td>
                    <td>{{ $application->interview_date }}</td>
                    <td>{{ ucfirst($application->interview_result) }}</td>
                    <td>{{ $application->submitted_documents }}</td>
                    <td>{{ $application->combination }}</td>
                    <td>{{ $application->uace_year_of_completion }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('student_applications.show', $application->id) }}"
                                class="btn btn-light">View</i></a>
                            <a href="{{ route('student_applications.edit', $application->id) }}"
                                class="btn btn-warning">Edit</a>
                            {{-- <a href="{{ route('student_applications.edit', $application->id) }}"
                                class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
                            <form action="{{ route('student_applications.destroy', $application->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this application?')">
                                    Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection