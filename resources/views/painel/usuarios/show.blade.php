@extends('painel.templates.template')

@section('content')

<h1 class="title-pg">Usuário - <b>{{$usuario->name, $usuario->last}}</b></h1>
<a href="{{route('usuarios.index')}}">
    <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-fast-backward"></span> Voltar </button></span> 
</a>

<p><b>E-mail: </b>{{$usuario->email}}</p>
<p><b>Endereço: </b>{{$usuario->endereco}}</p>
<p><b>Telefone: </b>{{$usuario->telefone}}</p>
<p><b>Cidade: </b>{{$usuario->cidade}}</p>
<p><b>Estado: </b>{{$usuario->estado}}</p>
<p><b>Código Postal: </b>{{$usuario->cep}}</p>
<p><b>Categoria: </b>{{$usuario->categoria}}</p>
<p><b>Imagem de Perfil: </b>{{$usuario->image}}</p>

<hr>

{!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method'=>'DELETE']) !!}
    {!! Form::submit("Deletar usuário: $usuario->name", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection