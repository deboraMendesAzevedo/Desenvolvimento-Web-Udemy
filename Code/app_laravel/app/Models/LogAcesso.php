<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Http\Middleware\LogAcessoMiddleware;



class LogAcesso extends Model
{
    use HasFactory;
    protected $fillable = ['log'];
}
