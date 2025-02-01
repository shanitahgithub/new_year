{{-- <div class="table-responsive">
    <table class="table" id="cohorts-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Expected Graduation Date</th>
                <th>Curriculum</th>
                <th>Number of Students</th>
                <th colspan="3" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cohorts as $cohort)
            <tr>
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
                <td>{{ $cohort->curriculum }}</td>
                <td>{{ $cohort->number_of_students }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['cohorts.destroy', $cohort->id], 'method' => 'delete']) !!}
                    <div class="btn-group">
                        <a href="{{ route('cohorts.show', [$cohort->id]) }}" class="btn btn-light action-btn"><i
                                class="fa fa-eye"></i></a>
                        <a href="{{ route('cohorts.edit', [$cohort->id]) }}"
                            class="btn btn-warning action-btn edit-btn"><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger
                        action-btn delete-btn', 'onclick' => 'return confirm("Are you sure you want to delete this
                        record?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#cohorts-table').DataTable({
            "paging": true,          
            "searching": true,       
            "ordering": true,        
            "pageLength": 5,         
            "lengthMenu": [5, 10, 25, 50] 
        });
    });
</script> --}}

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="cohorts-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Status</th>
                <th>Expected Graduation Date</th>
                <th>Curriculum</th>
                <th>Number of Students</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cohorts as $cohort)
            <tr>
                <td>{{ $cohort->name }}</td>
                <td>{{ \Carbon\Carbon::parse($cohort->start_date)->format('d M Y') }}</td>
                <td>{{ \Carbon\Carbon::parse($cohort->end_date)->format('d M Y') }}</td>
                <td>
                    @if ($cohort->status == 'active')
                    <span class="badge bg-success text-white">{{ ucfirst($cohort->status) }}</span>
                    @elseif ($cohort->status == 'inactive')
                    <span class="badge bg-danger text-white">{{ ucfirst($cohort->status) }}</span>
                    @else
                    <span class="badge bg-secondary text-white">{{ ucfirst($cohort->status) }}</span>
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($cohort->expected_graduation_date)->format('d M Y') }}</td>
                <td>{{ $cohort->curriculum }}</td>
                <td>{{ $cohort->number_of_students }}</td>
                <td class="text-center">
                    <a href="{{ route('cohorts.show', [$cohort->id]) }}" class="btn btn-light btn-sm"><i
                            class="fa fa-eye"></i></a>
                    <a href="{{ route('cohorts.edit', [$cohort->id]) }}" class="btn btn-warning btn-sm"><i
                            class="fa fa-edit"></i></a>
                    {!! Form::open(['route' => ['cohorts.destroy', $cohort->id], 'method' => 'delete', 'style' =>
                    'display:inline;']) !!}
                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger
                    btn-sm', 'onclick' => 'return confirm("Are you sure you want to delete this record?")']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#cohorts-table').DataTable({
            "paging": true,          
            "searching": true,       
            "ordering": true,        
            "pageLength": 5,         
            "lengthMenu": [5, 10, 25, 50] 
        });
    });
</script>