@extends('layouts.app')

@section('title', 'Visualizar Tarefa')

@section('content')
    <h1>Visualizar Tarefa</h1>

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
    </form>
@endsection