{{-- <div class="table-responsive">
    <table class="table" id="programs-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Program Code</th>
                <th>Credit Required</th>
                <th>Created By</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <tr>
                <td>{{ $program->name }}</td>
                <td>{{ $program->duration }}</td>
                <td>{{ $program->status }}</td>
                <td>{{ $program->program_code }}</td>
                <td>{{ $program->credit_required }}</td>
                <td>{{ $program->user->first_name }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['programs.destroy', $program->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('programs.show', [$program->id]) !!}" class='btn btn-light action-btn '><i
                                class="fa fa-eye"></i></a>
                        <a href="{!! route('programs.edit', [$program->id]) !!}"
                            class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger
                        action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record
                        ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

<div class="table-responsive">
    <table class="table table-striped table-bordered" id="programs-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Duration</th>
                <th>Status</th>
                <th>Program Code</th>
                <th>Credit Required</th>
                <th>Created By</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <tr>
                <td>{{ $program->name }}</td>
                <td>{{ $program->duration }}</td>
                <td>
                    @if ($program->status == 'active')
                    <span class="badge bg-success text-white">{{ ucfirst($program->status) }}</span>
                    @elseif ($program->status == 'inactive')
                    <span class="badge bg-danger text-white">{{ ucfirst($program->status) }}</span>
                    @else
                    <span class="badge bg-secondary text-white">{{ ucfirst($program->status) }}</span>
                    @endif
                </td>
                <td>{{ $program->program_code }}</td>
                <td>{{ $program->credit_required }}</td>
                <td>{{ $program->user->first_name }}</td>
                <td class="text-center">
                    <a href="{{ route('programs.show', [$program->id]) }}" class="btn btn-light btn-sm"><i
                            class="fa fa-eye"></i></a>
                    <a href="{{ route('programs.edit', [$program->id]) }}" class="btn btn-warning btn-sm"><i
                            class="fa fa-edit"></i></a>
                    {!! Form::open(['route' => ['programs.destroy', $program->id], 'method' => 'delete', 'style' =>
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
        $('#programs-table').DataTable({
            "paging": true,
            "searching": true,
            "ordering": true,
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50]
        });
    });
</script>