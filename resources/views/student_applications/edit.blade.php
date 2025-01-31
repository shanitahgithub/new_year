{{-- @extends('layouts.app')

@section('content')
<h1>Edit Student Application</h1>
<form action="{{ route('student_applications.update', $studentApplication->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('student_applications.fields')
    <button type="submit">Update</button>
</form>
@endsection --}}


@extends('layouts.app')

@section('title')
Edit Student Application
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading m-0">Edit Student Application</h3>
        <div class="filter-container section-header-breadcrumb row justify-content-md-end">
            <a href="{{ route('student_applications.index') }}" class="btn btn-primary">Back to Applications</a>
        </div>
    </div>

    <div class="content">
        @include('stisla-templates::common.errors')

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            {!! Form::model($studentApplication, ['route' => ['student_applications.update',
                            $studentApplication->id],
                            'method' => 'patch']) !!}
                            <div class="row">
                                <div class="form-group col-md-6">
                                    {!! Form::label('user', 'User') !!}
                                    {!! Form::text('user', $studentApplication->user->first_name . ' ' .
                                    $studentApplication->user->last_name, ['class' => 'form-control', 'disabled' =>
                                    'disabled']) !!}

                                    <!-- Hidden field for user_id -->
                                    {!! Form::hidden('user_id', $studentApplication->user_id) !!}
                                </div>


                                <div class="form-group col-md-6">
                                    {!! Form::label('date_of_birth', 'Date of Birth') !!}
                                    {!! Form::date('date_of_birth', $studentApplication->date_of_birth, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('address', 'Address') !!}
                                    {!! Form::text('address', $studentApplication->address, ['class' => 'form-control'])
                                    !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('status', 'Status') !!}
                                    {!! Form::select('status', ['approved' => 'approved', 'rejected' => 'rejected',
                                    'pending' => 'Pending', 'other' => 'Other'], $studentApplication->status, ['class'
                                    =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('program', 'Program') !!}
                                    {!! Form::text('program', $studentApplication->program->name, ['class' =>
                                    'form-control', 'disabled' => 'disabled']) !!}

                                    <!-- Hidden field for program_id -->
                                    {!! Form::hidden('program_id', $studentApplication->program_id) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('points_scored', 'Points Scored') !!}
                                    {!! Form::number('points_scored', $studentApplication->points_scored, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('secondary_school', 'Secondary School') !!}
                                    {!! Form::text('secondary_school', $studentApplication->secondary_school, ['class'
                                    =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('guardian_name', 'Guardian Name') !!}
                                    {!! Form::text('guardian_name', $studentApplication->guardian_name, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('guardian_contact', 'Guardian Contact') !!}
                                    {!! Form::text('guardian_contact', $studentApplication->guardian_contact, ['class'
                                    =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('nationality', 'Nationality') !!}
                                    {!! Form::text('nationality', $studentApplication->nationality, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('interview_date', 'Interview Date') !!}
                                    {!! Form::date('interview_date', $studentApplication->interview_date, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('interview_result', 'Interview Result') !!}
                                    {!! Form::select('interview_result', ['pending' => 'Pending', 'fail' =>
                                    'Failed','pass' => 'Passed'],
                                    $studentApplication->interview_result, ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('submitted_documents', 'Submitted Documents') !!}
                                    {!! Form::text('submitted_documents', $studentApplication->submitted_documents,
                                    ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('combination', 'Combination') !!}
                                    {!! Form::text('combination', $studentApplication->combination, ['class' =>
                                    'form-control']) !!}
                                </div>

                                <div class="form-group col-md-6">
                                    {!! Form::label('uace_year_of_completion', 'UACE Year of Completion') !!}
                                    {!! Form::text('uace_year_of_completion',
                                    $studentApplication->uace_year_of_completion,
                                    ['class' => 'form-control']) !!}
                                </div>

                                <div class="col-md-12">
                                    {!! Form::submit('Update Application', ['class' => 'btn btn-warning']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection