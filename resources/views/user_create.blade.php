<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
</head>
<body>
    <div class="container">
        <h2>Cadastrar Usuário</h2>
        <form action="{{route('users.store')}}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="name">Nome: </label>
                <input placeholder="Seu Nome" required id="name" name="name" type="text">
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input placeholder="Seu Email" required id="email" name="email" type="email">
            </div>
            <div class="form-group">
                <label for="password">Senha: </label>
                <input placeholder="Sua Senha" required id="password" name="password" type="password">
            </div>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="{{route('users.index')}}" class="btn-return">Retornar</a>
    </div>
</body>
</html>