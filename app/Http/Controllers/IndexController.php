<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function company()
    {
        return view('company');
    }
    public function manutencao()
    {
        return view('manutencao');
    }
    public function instalacao()
    {
        return view('instalacao');
    }
    public function manutencaoChiller()
    {
        return view('manutencao-chiller');
    }
    public function contato()
    {
        return view('contato');
    }

  
    
}
