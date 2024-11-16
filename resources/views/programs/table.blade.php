<div class="table-responsive">
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
            <td>{{ $program->created_by }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['programs.destroy', $program->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('programs.show', [$program->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('programs.edit', [$program->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
