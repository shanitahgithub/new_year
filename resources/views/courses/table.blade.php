<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>@lang('models/courses.fields.name')</th>
                <th>@lang('models/courses.fields.description')</th>
                <th>@lang('models/courses.fields.semester')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courseUnits as $courseUnit)
            <tr>
                <td>{{ $courseUnit->name }}</td>
                <td>{{ $courseUnit->description }}</td>
                <td>{{ $courseUnit->semester }}</td>
                <td class="text-center">
                    {!! Form::open(['route' => ['course-units.destroy', $courseUnit->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('course-units.show', [$courseUnit->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                        <a href="{!! route('course-units.edit', [$courseUnit->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
