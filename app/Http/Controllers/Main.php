<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class Main extends Controller
{
    //Route::get('/', [Main::class, 'index']);
    public function index(){
        return view('index');
    }

    /*Route::get('/Dashboard/{nome}/idade/{apelido?}', function($name, $idade, $apelido=''){
        echo "Nome: $name $apelido | Idade: $idade";
    });*/
    public function dash($empresa, $usuario){
        return view('Dashboard',[
            'empresa' => $empresa,
            'usuario' => $usuario
        ]);
    }
}