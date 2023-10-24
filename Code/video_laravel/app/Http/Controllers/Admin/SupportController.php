<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){

        $supports =$support->all(); // para todos os suportes

        $xss = '<script>alert("Sou linda");</script>';

        return view('admin/supports/index', compact('supports', 'xss'));

    }
}
