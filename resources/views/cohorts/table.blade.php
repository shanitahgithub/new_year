<!-- resources/views/cohorts/table.blade.php -->

<table id="cohorts-table" class="table table-striped table-bordered">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Expected Graduation Date</th> <!-- Added Expected Graduation Date -->
            <th>Curriculum</th> <!-- Added Curriculum -->
            <th>Number of Students</th> <!-- Added Number of Students -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cohorts as $cohort)
        <tr>
            {{-- <td>{{ $cohort->id }}</td> --}}
            <td>{{ $cohort->name }}</td>
            <td>{{ \Carbon\Carbon::parse($cohort->start_date)->format('d M Y') }}</td>
            <td>{{ \Carbon\Carbon::parse($cohort->end_date)->format('d M Y') }}</td>
            <td>
                @if ($cohort->status == 'active')
                <span class="badge badge-success">{{ ucfirst($cohort->status) }}</span>
                @elseif ($cohort->status == 'inactive')
                <span class="badge badge-danger">{{ ucfirst($cohort->status) }}</span>
                @else
                <span class="badge badge-secondary">{{ ucfirst($cohort->status) }}</span>
                @endif
            </td>
            <td>{{ \Carbon\Carbon::parse($cohort->expected_graduation_date)->format('d M Y') }}</td>
            <!-- Expected Graduation Date -->
            <td>{{ $cohort->curriculum }}</td> <!-- Curriculum -->
            <td>{{ $cohort->number_of_students }}</td> <!-- Number of Students -->
            <td>
                <a href="{{ route('cohorts.show', $cohort->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('cohorts.edit', $cohort->id) }}" class="btn btn-sm btn-warning">Edit</a>

                <form action="{{ route('cohorts.destroy', $cohort->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger"
                        onclick="return confirm('Are you sure you want to delete this cohort?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>