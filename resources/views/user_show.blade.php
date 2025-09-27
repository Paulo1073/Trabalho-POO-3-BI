<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Usuário</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <style>
        .user-details {
            background-color: #1a202c;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.2rem;
        }
        .btn-delete {
            background-color: #e53e3e; /* Vermelho */
        }
        .btn-delete:hover {
            background-color: #c53030; /* Vermelho mais escuro */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalhes do Usuário</h2>
        <div class="user-details">
            <p><strong>ID:</strong> {{ $user->id }}</p>
            <p><strong>Nome:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="margin-top: 0;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-delete" onclick="return confirm('Tem certeza que deseja deletar este usuário?')">Deletar</button>
        </form>
        <a href="{{route('users.index')}}" class="btn-return">Retornar</a>
    </div>
</body>
</html>
