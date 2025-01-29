<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', __('models/courses.fields.course_name').':') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', __('models/courses.fields.description').':') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Semester Field -->
<div class="form-group col-sm-6">
    {!! Form::label('semester', __('models/courses.fields.semester').':') !!}
    {!! Form::text('semester', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
