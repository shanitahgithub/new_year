@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h4>Edit Student</h4>
    <div class="card shadow-sm">
        <div class="card-body">


            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="{{ $student->user->first_name }}"
                        required>
                </div>

                <div class="form-group">
                    <label>Reg Number</label>
                    <input type="text" name="reg_number" class="form-control" value="{{ $student->reg_number }}"
                        required>
                </div>

                <div class="form-group">
                    <label>Admission Date</label>
                    <input type="date" name="admission_date" class="form-control"
                        value="{{ \Carbon\Carbon::parse($student->admission_date)->format('Y-m-d') }}" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="active" {{ $student->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="graduated" {{ $student->status == 'graduated' ? 'selected' : '' }}>Graduated
                        </option>
                        <option value="dropped" {{ $student->status == 'dropped' ? 'selected' : '' }}>Dropped</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Cohort</label>
                    <input type="text" name="cohort" class="form-control" value="{{ $student->cohort->name }}" required>
                </div>

                <!-- Closing the form here -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form> <!-- This was missing -->
        </div>
    </div>
</div>
@endsection