@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Lecturer Details</h2>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $lecturer->name }}</h4>

            <div class="mb-3">
                <strong>Email:</strong> {{ $lecturer->email }}
            </div>

            <div class="mb-3">
                <strong>Phone Number:</strong> {{ $lecturer->phone_number }}
            </div>

            <div class="mb-3">
                <strong>Gender:</strong> {{ $lecturer->gender ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Position:</strong> {{ $lecturer->position ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Status:</strong> {{ $lecturer->status ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Supervised Students (Final Year Projects):</strong> {{ $lecturer->supervised_students ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Social Links:</strong> 
                <a href="{{ $lecturer->social_links }}" target="_blank">
                    {{ $lecturer->social_links ?? 'N/A' }}
                </a>
            </div>

            <div class="mb-3">
                <strong>Office Hours:</strong> {{ $lecturer->office_hours ?? 'N/A' }}
            </div>

            <div class="mb-3">
                <strong>Profile Image:</strong><br>
                <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Lecturer Image" class="img-thumbnail" width="150">
            </div>

            <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('lecturers.edit', $lecturer->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('lecturers.destroy', $lecturer->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
