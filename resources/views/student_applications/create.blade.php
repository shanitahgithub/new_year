{{-- @extends('layouts.app')

@section('content')
<h2>Student Applications</h2>
<a href="{{ route('student_applications.create') }}" class="btn btn-primary">Add New Application</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date of Birth</th>
            <th>Nationality</th>
            <th>Guardian</th>
            <th>Interview Date</th>
            <th>Interview Result</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
        <tr>
            <td>{{ $application->id }}</td>
            <td>{{ $application->date_of_birth }}</td>
            <td>{{ $application->nationality }}</td>
            <td>{{ $application->guardian_name }}</td>
            <td>{{ $application->interview_date }}</td>
            <td>{{ $application->interview_result }}</td>
            <td>{{ $application->status }}</td>
            <td>
                <a href="{{ route('student_applications.show', $application->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('student_applications.edit', $application->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('student_applications.destroy', $application->id) }}" method="POST"
                    style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection --}}

{{-- @extends('layouts.app')

@section('content')
<h1>Create Student Application</h1>
<form action="{{ route('student_applications.store') }}" method="POST">
    @csrf
    @include('student-applications.fields')
    <button type="submit">Submit</button>
</form>
@endsection --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Student Application</h1>

    <form action="{{ route('student_applications.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="user_id">User:</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">Select User</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}" {{ old('user_id')==$user->id ? 'selected' : '' }}>
                    {{ $user->name }}
                </option>
                @endforeach
            </select>
            @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                value="{{ old('date_of_birth') }}" required>
            @error('date_of_birth')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" class="form-control" required>{{ old('address') }}</textarea>
            @error('address')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending" {{ old('status')=='pending' ? 'selected' : '' }}>Pending</option>
                <option value="approved" {{ old('status')=='approved' ? 'selected' : '' }}>Approved</option>
                <option value="rejected" {{ old('status')=='rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
            @error('status')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="program_id">Program:</label>
            <select name="program_id" id="program_id" class="form-control" required>
                <option value="">Select Program</option>
                @foreach($programs as $program)
                <option value="{{ $program->id }}" {{ old('program_id')==$program->id ? 'selected' : '' }}>
                    {{ $program->name }}
                </option>
                @endforeach
            </select>
            @error('program_id')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="nationality">Nationality:</label>
            <input type="text" name="nationality" id="nationality" class="form-control" value="{{ old('nationality') }}"
                required>
            @error('nationality')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="guardian_name">Guardian Name:</label>
            <input type="text" name="guardian_name" id="guardian_name" class="form-control"
                value="{{ old('guardian_name') }}" required>
            @error('guardian_name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="guardian_contact">Guardian Contact:</label>
            <input type="text" name="guardian_contact" id="guardian_contact" class="form-control"
                value="{{ old('guardian_contact') }}" required>
            @error('guardian_contact')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="interview_date">Interview Date:</label>
            <input type="date" name="interview_date" id="interview_date" class="form-control"
                value="{{ old('interview_date') }}">
            @error('interview_date')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="interview_result">Interview Result:</label>
            <select name="interview_result" id="interview_result" class="form-control" required>
                <option value="pending" {{ old('interview_result')=='pending' ? 'selected' : '' }}>Pending</option>
                <option value="passed" {{ old('interview_result')=='approved' ? 'selected' : '' }}>Passed</option>
                <option value="failed" {{ old('interview_result')=='rejected' ? 'selected' : '' }}>Failed</option>
            </select>
            @error('interview_result')<div class="text-danger">{{ $message }}</div>@enderror
        </div>



        <div class="form-group">
            <label for="submitted_documents">Submitted Documents (JSON format):</label>
            <textarea name="submitted_documents" id="submitted_documents"
                class="form-control">{{ old('submitted_documents') }}</textarea>
            @error('submitted_documents')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="secondary_school">Secondary School:</label>
            <input type="text" name="secondary_school" id="secondary_school" class="form-control"
                value="{{ old('secondary_school') }}" required>
            @error('secondary_school')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="combination">Combination:</label>
            <input type="text" name="combination" id="combination" class="form-control" value="{{ old('combination') }}"
                required>
            @error('combination')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="points_scored">Points Scored:</label>
            <input type="number" name="points_scored" id="points_scored" class="form-control"
                value="{{ old('points_scored') }}" required>
            @error('points_scored')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label for="uace_year_of_completion">UACE Year of Completion:</label>
            <input type="text" name="uace_year_of_completion" id="uace_year_of_completion" class="form-control"
                value="{{ old('uace_year_of_completion') }}">
            @error('uace_year_of_completion')<div class="text-danger">{{ $message }}</div>@enderror
        </div>

        <button type="submit" class="btn btn-success">Create Application</button>
    </form>
</div>


@endsection