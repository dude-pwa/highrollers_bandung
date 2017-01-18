<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    {{--<td>{{ $user->hasRole('User') ? 'User' : $user->hasRole('Admin') ? 'Admin' : '' }} </td>--}}
                <td>
                    @if($user->hasRole('User'))
                        User
                    @elseif($user->hasRole('Admin'))
                        Admin
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>