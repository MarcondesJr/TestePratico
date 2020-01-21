@extends('painel.templates.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1 class="title-pg">Gerenciamento de Usuários</h1>

<a href="{{route('usuarios.create')}}" class="btn btn-primary btn-sm btn-add"><span class="glyphicon glyphicon-plus-sign"></span> Cadastrar</a>

<hr>

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Categoria</th>
            <th>Opções</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->last}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{$usuario->telefone}}</td>
            <td>{{$usuario->categoria}}</td>
            <td>
                <a href="{{route('usuarios.edit', $usuario->id)}}">
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-pencil"></span>  
                    </button>
                </a>
                <a href="{{route('usuarios.show', $usuario->id)}}">
                    <button type="button" class="btn btn-default btn-sm">
                        <span class="glyphicon glyphicon-eye-open"></span>  
                    </button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>

{!! $usuarios->links() !!}

@endsection