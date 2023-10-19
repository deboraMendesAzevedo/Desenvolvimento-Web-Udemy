<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([

                'nome'=> 'Fornecedor200',
                'site'=> 'fornecedor200.com.br',
                'uf'=> 'RS',
                'email'=> 'contato@fornecedor200.com.br'
         

        ]);
    }
}
