<table class="table table-striped table-bordered" id="semesters-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Program</th>
            <th>Created By</th>
            <th colspan="3" class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($semesters as $semester)
        <tr>
            <td>{{ $semester->name }}</td>
            <td>{{ $semester->start_date }}</td>
            <td>{{ $semester->end_date }}</td>
            <td>
                <span class="badge bg-success text-white">{{ $semester->status }}</span>
            </td>
            <td>{{ $semester->programs->name ?? 'Loading....' }}</td>
            <td>
                @if($semester->user)
                {{ $semester->user->first_name }}
                @else
                Unknown
                @endif
            </td>
            <td class="text-center">
                <div class="btn-group">
                    <a href="{{ route('semesters.show', $semester->id) }}" class="btn btn-light"><i
                            class="fa fa-eye"></i></a>
                    <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-warning"><i
                            class="fa fa-edit"></i></a>
                    <form action="{{ route('semesters.destroy', $semester->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                                class="fa fa-trash"></i></button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>