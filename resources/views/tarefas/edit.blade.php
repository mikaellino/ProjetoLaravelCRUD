@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
    <h1>Editar Tarefa</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tarefas.update', $tarefa->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="titulo" class="form-label">Título da tarefa</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $tarefa->titulo }}" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição da tarefa</label>
            <textarea name="descricao" id="descricao" class="form-control">{{ $tarefa->descricao }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar a tarefa</button>
        <a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Clique para Voltar</a>
    </form>
@endsection