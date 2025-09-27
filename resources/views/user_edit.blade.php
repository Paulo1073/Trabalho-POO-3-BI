<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form.css') }}">
    <title>Editar Usuário</title>
</head>
<body>
    <div class="container">
        <h2>Editar Usuário</h2>
        
        @if(session()->has('message'))
            <div class="message">
                {{session()->get('message')}}
            </div>
        @endif
        <form action="{{route('users.update',['user'=> $user->id ])}}"  method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input name="name" id="name" type="text"  value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input name="email" id="email" type="email"  value="{{$user->email}}">
            </div>
            <button type="submit">ATUALIZAR</button>
        </form>
        <a href="{{route('users.index')}}" class="btn-return">Retornar</a>
    </div>
</body>
</html>
