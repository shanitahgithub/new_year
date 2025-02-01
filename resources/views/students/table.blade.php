<!-- resources/views/students/table.blade.php -->

<div style="max-height: 400px; overflow-y: auto;">
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Student Name</th>
                <th>Reg Number</th>
                <th>Admission Date</th>
                <th>Status</th>
                <th>Cohort</th>
                <th>Created By</th>
                <th>Student Application ID</th>
                <th>Actions</th> <!-- Column for action buttons -->
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->user->first_name }}</td>
                <td>{{ $student->reg_number }}</td>
                <td>{{ \Carbon\Carbon::parse($student->admission_date)->format('d M Y') }}</td>
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
                <td>{{ $student->cohort->name }}</td>
                <td>{{ Auth::user()->first_name }}</td>
                <td>{{ $student->student_application_id }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>