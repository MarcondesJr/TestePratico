@extends('painel.templates.template')

@section('content')

<h1 class="title-pg"> 
    Gestão de Usuário - <b>{{$usuario->name ?? 'Novo Usuário'}}</b> 
</h1>

<hr>

<a href="{{route('usuarios.index')}}">
    <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-fast-backward"></span> Voltar </button></span> 
</a>
    
@if ( @isset($errors) && count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    </div>
@endif

@if (isset($usuario))
    {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'class' => 'form', 'method' => 'put']) !!}
    
@else
    {{!! Form::open(['route'=>'usuarios.store', 'class'=>'form']) !!}}
@endif
    <div class="form-row">
        <div class="col">
            <label for="name">Nome</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>'Primeiro Nome']) !!}
        </div>
        <div class="col">
            <label for="last">Sobrenome</label>
            {!! Form::text('last', null, ['class' => 'form-control', 'placeholder'=>'Ultimo Nome']) !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'seuemail@provedor.com']) !!}
        </div>
        <div class="form-group col-md-6">
            <label for="Password">Senha</label>
            {!! Form::text('password', null, ['class' => 'form-control', 'placeholder'=>'Senha']) !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="endereco">Endereço</label>
            {!! Form::text('endereco', null, ['class' => 'form-control', 'placeholder'=>'Rua, Av, Travessa - nº XXX . Bairro']) !!}
        </div>
        <div class="form-group col-md-6">
            <label for="telefone">Telefone </label>
            {!! Form::text('telefone', null, ['class' => 'form-control', 'placeholder'=>'(011)99999-9999']) !!}
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cidade">Cidade</label>
            {!! Form::text('cidade', null, ['class' => 'form-control', 'placeholder'=>'Cidade']) !!}
        </div>
        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            {!! Form::select('estado', $estados, null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            {!! Form::text('cep', null, ['class' => 'form-control', 'placeholder'=>'Código Postal']) !!}
        </div>
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        {!! Form::select('categoria', $cats, null, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        <label for="image">Carregar foto do Perfil</label>
        {!! Form::file('image', null, ['class' => 'form-control-file']); !!}
    </div>

    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}

@endsection