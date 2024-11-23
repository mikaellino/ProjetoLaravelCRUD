<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tarefas', [TarefaController:: class, 'index'])->name('tarefas.index');
Route::get('/tarefas/create', [TarefaController:: class, 'create'])->name('tarefas.create');
Route::post('/tarefas', [TarefaController:: class, 'store'])->name('tarefas.store');
Route::get('/tarefas{id}/edit', [TarefaController:: class, 'edit'])->name('tarefas.edit');
Route::get('/tarefas{id}/show', [TarefaController:: class, 'show'])->name('tarefas.show');
Route::put('/tarefas/{id}', [TarefaController:: class, 'update'])->name('tarefas.update');
Route::delete('/tarefas/{id}', [TarefaController:: class, 'destroy'])->name('tarefas.destroy');
