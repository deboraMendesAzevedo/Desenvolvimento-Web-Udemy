<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // instanciar o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // Usando o create (atenção para o atributo fillable da classe se não tiver precisa incluir)
        Fornecedor::create([
            'nome'=> 'Fornecedor200',
            'site'=> 'fornecedor200.com.br',
            'uf'=> 'RS',
            'email'=> 'contato@fornecedor200.com.br'
        ]);
        //insert por um array
        DB::table('fornecedores')->insert([

            'nome'=> 'Fornecedor200',
            'site'=>  'fornecedor300.com.br',
            'uf'=> 'SP',
            'email'=> 'contato@fornecedor300.com.br'

        ]);


    }
}
