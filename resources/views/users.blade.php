<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Usuários</title>
</head>
<body>
    <div class="container">
        <h2>Usuários</h2>
        <a href="{{route('users.create')}}" class="btn-create">Cadastrar</a>

        @if(session()->has('message'))
            <div class="message">
                {{ session()->get('message') }}
            </div>
        @endif

        <ul>
            @foreach ($users as $user)
                <li>
                    <span>{{ $user->name }}</span>
                    <div>
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar</a>
                        <a href="{{route('users.show', ['user' => $user->id])}}">Mostrar</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
