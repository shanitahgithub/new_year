{{-- <table class="table table-striped table-bordered" id="semesters-table">
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

<script>
    $(document).ready(function() {
        $('#semesters-table').DataTable({
            "paging": true,          // Enables paging
            "searching": true,       // Enables search
            "ordering": true,        // Enable sorting
            "pageLength": 5,         // Number of rows per page
            "lengthMenu": [5, 10, 25, 50] // Options for page length
        });
    });
</script> --}}


<table class="table table-striped table-bordered" id="semesters-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Program</th>
            <th>Created By</th>
            <th class="text-center">Actions</th>
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
                <a href="{{ route('semesters.show', $semester->id) }}" class="btn btn-light btn-sm"><i
                        class="fa fa-eye"></i></a>
                <a href="{{ route('semesters.edit', $semester->id) }}" class="btn btn-warning btn-sm"><i
                        class="fa fa-edit"></i></a>
                <form action="{{ route('semesters.destroy', $semester->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#semesters-table').DataTable({
            "paging": true,          
            "searching": true,       
            "ordering": true,        
            "pageLength": 5,         
            "lengthMenu": [5, 10, 25, 50] 
        });
    });
</script>