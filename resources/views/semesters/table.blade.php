{{-- @section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush --}}


<table class="table table-striped table-bordered">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
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
                <td>
                    <a href="{{ route('semesters.show', $semester->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('semesters.destroy', $semester->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
