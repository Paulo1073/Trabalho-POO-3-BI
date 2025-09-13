<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar<h1>
    
    @if(session()->has('message'))
        {{session()->get('message')}}
    @endif
    <form action="{{route('users.update',['user'=> $user->id ])}}"  method="post">
        @csrf
        <input name="_method" value='PUT' type="hidden">
        <input name="name" type="text"  value="{{$user->name}}">
        <input name="email" type="text"  value="{{$user->email}}">
        <input name="passeord" type="text"  value="{{$user->password}}">
        <input type="submit" value="ATUALIZAR">

    </form>
</body>
</html>