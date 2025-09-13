<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Usuarios</h2>
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <ul>
        @foreach ($users as $user)
            <li ' >
                Nome: {{ $user->name }} | Email:{{ $user->email }} | Senha:{{ $user->password }} | <a href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a> |  <a href="">Delete</a>
            </li>
        @endforeach
    </ul>
</body>
</html>