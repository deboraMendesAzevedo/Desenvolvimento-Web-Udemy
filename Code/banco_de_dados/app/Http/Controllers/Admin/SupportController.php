<?php

namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Teste2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(){
        return view('admin/supports/index');

    }
}
