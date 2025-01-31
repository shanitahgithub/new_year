<table class="table table-striped table-bordered">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Program</th>
            <th>Created by</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semesters as $semester)
        <tr>
            {{-- <td>{{ $semester->id }}</td> --}}
            <td>{{ $semester->name }}</td>
            <td>{{ $semester->start_date }}</td>
            <td>{{ $semester->end_date }}</td>
            <td>
                <span class="badge bg-success text-white">{{ $semester->status }}</span>
            </td>
            {{-- <td>{{ $semester->program}}</td> --}}
            <td>{{ $semester->programs->name ?? 'Loading....' }}</td>



            {{-- <td>{{ $semester->user->name }}</td> --}}
            <td>
                @if($semester->user)
                {{ $semester->user->first_name }}
                @else
                Unknown
                @endif
            </td>


            <td>
                <a href="{{ route('semesters.show', $semester->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('semesters.destroy', $semester->id) }}" method="POST" style="display-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>