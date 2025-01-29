<div class="container">
    <h2 class="mb-4">Lecturer Details</h2>

    <div class="mb-3">
        <strong>Name:</strong> {{ $lecturer->name }}
    </div>

    <div class="mb-3">
        <strong>Email:</strong> {{ $lecturer->email }}
    </div>

    <div class="mb-3">
        <strong>Phone Number:</strong> {{ $lecturer->phone_number }}
    </div>

    <div class="mb-3">
        <strong>Gender:</strong> {{ $lecturer->gender }}
    </div>

    <div class="mb-3">
        <strong>Position:</strong> {{ $lecturer->position }}
    </div>

    <div class="mb-3">
        <strong>Status:</strong> {{ $lecturer->status }}
    </div>

    <div class="mb-3">
        <strong>Supervised Students (Final Year Projects):</strong> {{ $lecturer->supervised_students }}
    </div>

    <div class="mb-3">
        <strong>Social Links:</strong> {{ $lecturer->social_links }}
    </div>

    <div class="mb-3">
        <strong>Office Hours:</strong> {{ $lecturer->office_hours }}
    </div>

    <div class="mb-3">
        <strong>Profile Image:</strong><br>
        <img src="{{ asset('storage/' . $lecturer->image) }}" alt="Lecturer Image" width="150">
    </div>

    <a href="{{ route('lecturers.index') }}" class="btn btn-secondary">Back to List</a>
</div>
