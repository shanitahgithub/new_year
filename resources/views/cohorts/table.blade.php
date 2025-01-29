{{-- @section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}

@push('scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endpush --}}


<table id="cohorts-table" class="table table-striped table-bordered">
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cohorts as $cohort)
            <tr>
                {{-- <td>{{ $cohort->id }}</td> --}}
                <td>{{ $cohort->name }}</td>
                <td>{{ $cohort->description }}</td>
                <td>{{ $cohort->start_date }}</td>
                <td>{{ $cohort->end_date }}</td>
                <td>

                    <a href="{{ route('cohorts.show', $cohort->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('cohorts.edit', $cohort->id) }}" class="btn btn-sm btn-info">Edit</a>

                    <form action="{{ route('cohorts.destroy', $cohort->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
