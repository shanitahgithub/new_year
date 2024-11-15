<div class="table-responsive">
    <table class="table" id="courses-table">
        <thead>
            <tr>
                <th>@lang('models/courses.fields.course_name')</th>
        <th>@lang('models/courses.fields.programme_type')</th>
        <th>@lang('models/courses.fields.duration')</th>
        <th>@lang('models/courses.fields.core_courses')</th>
        <th>@lang('models/courses.fields.course_units')</th>
        <th>@lang('models/courses.fields.admission_requirements')</th>
        <th>@lang('models/courses.fields.fees')</th>
        <th>@lang('models/courses.fields.category')</th>
        <th>@lang('models/courses.fields.credit_units')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
            <tr>
                       <td>{{ $course->course_name }}</td>
            <td>{{ $course->programme_type }}</td>
            <td>{{ $course->duration }}</td>
            <td>{{ $course->core_courses }}</td>
            <td>{{ $course->course_units }}</td>
            <td>{{ $course->admission_requirements }}</td>
            <td>{{ $course->fees }}</td>
            <td>{{ $course->category }}</td>
            <td>{{ $course->credit_units }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('courses.show', [$course->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('courses.edit', [$course->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
