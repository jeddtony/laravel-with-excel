<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td><h1>{{ $user->name }}</h1></td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>