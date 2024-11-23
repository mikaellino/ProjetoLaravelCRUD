<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required',
        ]);

        Tarefa::create($request->all());

        return redirect()->route('tarefas.index');
    }

    public function edit($id)
    {
        $tarefa = Tarefa::findOrFail($id);
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'descricao' => 'required',
        ]);

        $tarefa = Tarefa::findOrFail($id);
        $tarefa->update($request->all());

        return redirect()->route('tarefas.index');
    }

    public function destroy($id)
    {
        Tarefa::findOrFail($id)->delete();
        return redirect()->route('tarefas.index');
    }
}
