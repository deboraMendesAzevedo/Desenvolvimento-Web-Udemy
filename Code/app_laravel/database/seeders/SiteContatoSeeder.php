<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema';
        $contato->telefone = '(00)0055255';
        $contato->email = 'contato@teste';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao sistema ';
        $contato->save();
        */
       \App\Models\SiteContato::factoty()->count(100)->create();
    }
}
