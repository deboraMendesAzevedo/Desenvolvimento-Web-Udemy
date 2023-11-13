<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['nome', 'descricao', 'peso', 'unidade_id'];

    public function itemDetalhe() {
        // primeiro parametro o caminho o segundo a FK e o terceiro a chave primaria 
        return $this->hasOne('App\Models\ItemDetalhe', 'produto_id', 'id');
    }
}
