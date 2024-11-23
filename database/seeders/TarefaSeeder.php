<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarefa::create([ 
            'titulo' => 'MiniProjeto', 
            'descricao' => 'Tarefa da Juliana 2', 
            ]);
            Tarefa::create([ 
                'titulo' => 'Tarefa de Videos do Alex', 
                'descricao' => 'Tarefa do Alex 2', 
                ]);
              
    }
}
