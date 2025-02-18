<div class="card">
    <div class="card-header">
        <h4>Recent Activity</h4>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($activities as $activity)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $activity->title }}
                <form action="{{ route('recent-activities.destroy', $activity->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<!-- Add New Activity Form -->
<div class="card mt-3">
    <div class="card-header">
        <h4>Add New Activity</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('recent-activities.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Activity Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Activity</button>
        </form>
    </div>
</div>