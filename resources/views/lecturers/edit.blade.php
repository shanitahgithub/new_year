@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <h2 class="mb-4">Edit Lecturer</h2> --}}
    <div class="section-header"> 
        <h3 class="page__heading m-0">@lang('Edit Lecturer')</h3> 
       <div class="filter-container section-header-breadcrumb row justify-content-md-end">
           <a href="{{ route('lecturers.index') }}" class="btn btn-primary">@lang('Back')</a>
       </div> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lecturers.update', $lecturer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $lecturer->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $lecturer->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number', $lecturer->phone_number) }}" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select name="gender" id="gender" class="form-control">
                <option value="">Select</option>
                <option value="Male" {{ old('gender', $lecturer->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $lecturer->gender) == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Other" {{ old('gender', $lecturer->gender) == 'Other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" name="position" id="position" class="form-control" value="{{ old('position', $lecturer->position) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" value="{{ old('status', $lecturer->status) }}">
        </div>

        <div class="mb-3">
            <label for="supervised_students" class="form-label">Supervised Students (Final Year Projects)</label>
            <input type="text" name="supervised_students" id="supervised_students" class="form-control" value="{{ old('supervised_students', $lecturer->supervised_students) }}">
        </div>

        <div class="mb-3">
            <label for="social_links" class="form-label">Social Links</label>
            <input type="text" name="social_links" id="social_links" class="form-control" value="{{ old('social_links', $lecturer->social_links) }}">
        </div>

        <div class="mb-3">
            <label for="office_hours" class="form-label">Office Hours</label>
            <input type="text" name="office_hours" id="office_hours" class="form-control" value="{{ old('office_hours', $lecturer->office_hours) }}">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="file" name="image" id="image" class="form-control">
            @if ($lecturer->image)
                <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Lecturer Image" class="mt-2" width="100">
            @endif
        </div>

        <button type="submit" class="btn btn-success">Update Lecturer</button>
    </form>
</div>
@endsection
