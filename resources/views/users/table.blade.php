<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>Run</th>
        <th>Dv</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Password</th>
        <th>Email</th>
        <th>Email Verified At</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Id Role</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>
                <td>{{ $users->run }}</td>
            <td>{{ $users->dv }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->lastname }}</td>
            <td>{{ $users->password }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->email_verified_at }}</td>
            <td>{{ $users->phone }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->id_role }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$users->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$users->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
