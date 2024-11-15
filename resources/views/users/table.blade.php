<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Image</th>
                <th>Status</th>
                <th>Gender</th>
                <th>Role</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->image }}</td>
                <td>
                    @if ($user->status == 'active')
                    <span class="badge badge-success">{{ $user->status }}</span>
                    @elseif ($user->status == 'inactive')
                    <span class="badge badge-danger">{{ $user->status }}</span>
                    @elseif ($user->status == 'pending')
                    <span class="badge badge-warning">{{ $user->status }}</span>
                    @else
                    <span class="badge badge-secondary">{{ $user->status }}</span>
                    @endif
                </td>

                <td>{{ $user->gender }}</td>
                <td>{{ $user->role->name }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                        <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>