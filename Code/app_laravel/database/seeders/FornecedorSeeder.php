<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // instanciar o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = Str('Fornecedor100');
        $fornecedor->site = Str('fornecedor100.com.br');
        $fornecedor->uf = Str('CE');
        $fornecedor->email = Str('contato@fornecedor100.com.br');
        $fornecedor->save();

        // Usando o create (atenção para o atributo fillable da classe se não tiver precisa incluir)
        Fornecedor::create([
            'nome'=> Str('Fornecedor200'),
            'site'=> Str('fornecedor200.com.br'),
            'uf'=> Str('RS'),
            'email'=> Str('contato@fornecedor200.com.br'),
        ]);
        //insert por um array
        DB:table('fornecedores')->insert([

            'nome'=> Str('Fornecedor200'),
            'site'=>  Str('fornecedor300.com.br'),
            'uf'=> Str('SP'),
            'email'=> Str('contato@fornecedor300.com.br'),

        ]);


    }
}
