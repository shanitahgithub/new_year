<?php
use App\Models\User;
$users = User::pluck('first_name', 'last_name','id');
?>


<div class="form-group">
    <label for="user_id">User:</label>
    <select name="user_id" id="user_id" class="form-control" required>
        <option value="">Select User</option>
        @foreach($users as $id => $firstName)
        <option value="{{ $id }}" {{ old('user_id')==$id ? 'selected' : '' }}>
            {{ $firstName }}
        </option>
        @endforeach
    </select>
</div>


{{-- <div class="form-group">
    <label for="user_id">User:</label>
    <p>{{ $studentApplication->user->name }}</p>
</div> --}}

<div class="form-group">
    <label for="date_of_birth">Date of Birth:</label>
    <p>{{ $studentApplication->date_of_birth }}</p>
</div>

<div class="form-group">
    <label for="address">Address:</label>
    <p>{{ $studentApplication->address }}</p>
</div>

<div class="form-group">
    <label for="status">Status:</label>
    <p>{{ ucfirst($studentApplication->status) }}</p>
</div>

<div class="form-group">
    <label for="program_id">Program:</label>
    <p>{{ $studentApplication->program->name }}</p>
</div>

<div class="form-group">
    <label for="nationality">Nationality:</label>
    <p>{{ $studentApplication->nationality }}</p>
</div>

<div class="form-group">
    <label for="guardian_name">Guardian Name:</label>
    <p>{{ $studentApplication->guardian_name }}</p>
</div>

<div class="form-group">
    <label for="guardian_contact">Guardian Contact:</label>
    <p>{{ $studentApplication->guardian_contact }}</p>
</div>

<div class="form-group">
    <label for="interview_date">Interview Date:</label>
    <p>{{ $studentApplication->interview_date }}</p>
</div>

<div class="form-group">
    <label for="interview_result">Interview Result:</label>
    <p>{{ ucfirst($studentApplication->interview_result) }}</p>
</div>

<div class="form-group">
    <label for="submitted_documents">Submitted Documents:</label>
    <p>{{ $studentApplication->submitted_documents }}</p>

</div>

<div class="form-group">
    <label for="secondary_school">Secondary School:</label>
    <p>{{ $studentApplication->secondary_school }}</p>
</div>

<div class="form-group">
    <label for="combination">Combination:</label>
    <p>{{ $studentApplication->combination }}</p>
</div>

<div class="form-group">
    <label for="points_scored">Points Scored:</label>
    <p>{{ $studentApplication->points_scored }}</p>
</div>

<div class="form-group">
    <label for="uace_year_of_completion">UACE Year of Completion:</label>
    <p>{{ $studentApplication->uace_year_of_completion ?? 'N/A' }}</p>
</div>

<div class="form-group">
    <label for="created_at">Created At:</label>
    <p>{{ $studentApplication->created_at->toFormattedDateString() }}</p>
</div>

<div class="form-group">
    <label for="updated_at">Updated At:</label>
    <p>{{ $studentApplication->updated_at->toFormattedDateString() }}</p>
</div>