<!-- Course Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_name', __('models/courses.fields.course_name').':') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Programme Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programme_type', __('models/courses.fields.programme_type').':') !!}
    {!! Form::text('programme_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', __('models/courses.fields.duration').':') !!}
    {!! Form::number('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Core Courses Field -->
<div class="form-group col-sm-6">
    {!! Form::label('core_courses', __('models/courses.fields.core_courses').':') !!}
    {!! Form::text('core_courses', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Units Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course_units', __('models/courses.fields.course_units').':') !!}
    {!! Form::text('course_units', null, ['class' => 'form-control']) !!}
</div>

<!-- Admission Requirements Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admission_requirements', __('models/courses.fields.admission_requirements').':') !!}
    {!! Form::text('admission_requirements', null, ['class' => 'form-control']) !!}
</div>

<!-- Fees Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fees', __('models/courses.fields.fees').':') !!}
    {!! Form::number('fees', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', __('models/courses.fields.category').':') !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<!-- Credit Units Field -->
<div class="form-group col-sm-6">
    {!! Form::label('credit_units', __('models/courses.fields.credit_units').':') !!}
    {!! Form::number('credit_units', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-light">@lang('crud.cancel')</a>
</div>
