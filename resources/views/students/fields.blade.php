<!-- resources/views/students/fields.blade.php -->
<div class="form-group">
    <label for="user_id">User</label>
    <select name="user_id" class="form-control" id="user_id" required>
        @foreach($users as $user)
        <option value="{{ $user->id }}" {{ old('user_id', $student->user_id ?? '') == $user->id ? 'selected' : '' }}>
            {{ $user->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="reg_number">Reg Number</label>
    <input type="text" name="reg_number" class="form-control" id="reg_number"
        value="{{ old('reg_number', $student->reg_number ?? '') }}" required>
</div>

<div class="form-group">
    <label for="admission_date">Admission Date</label>
    <input type="date" name="admission_date" class="form-control" id="admission_date"
        value="{{ old('admission_date', $student->admission_date ?? '') }}" required>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" class="form-control" id="status" required>
        <option value="active" {{ old('status', $student->status ?? '') == 'active' ? 'selected' : '' }}>Active</option>
        <option value="graduated" {{ old('status', $student->status ?? '') == 'graduated' ? 'selected' : '' }}>Graduated
        </option>
        <option value="dropped" {{ old('status', $student->status ?? '') == 'dropped' ? 'selected' : '' }}>Dropped
        </option>
    </select>
</div>

<div class="form-group">
    <label for="cohort_id">Cohort</label>
    <select name="cohort_id" class="form-control" id="cohort_id" required>
        @foreach($cohorts as $cohort)
        <option value="{{ $cohort->id }}" {{ old('cohort_id', $student->cohort_id ?? '') == $cohort->id ? 'selected' :
            '' }}>
            {{ $cohort->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="created_by">Created By</label>
    <select name="created_by" class="form-control" id="created_by" required>
        @foreach($users as $user)
        <option value="{{ $user->id }}" {{ old('created_by', $student->created_by ?? '') == $user->id ? 'selected' : ''
            }}>
            {{ $user->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="student_application_id">Student Application ID</label>
    <select name="student_application_id" class="form-control" id="student_application_id" required>
        @foreach($studentApplications as $application)
        <option value="{{ $application->id }}" {{ old('student_application_id', $student->student_application_id ?? '')
            == $application->id ? 'selected' : '' }}>
            {{ $application->id }}
        </option>
        @endforeach
    </select>
</div>