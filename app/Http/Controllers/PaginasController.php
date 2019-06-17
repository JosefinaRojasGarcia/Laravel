<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PaginasController extends Controller{
    
     public function loginEgresado(){
        return view('loginEgresado');
    }
     public function registrar(){
        return view('registrar');
    }

        public function lock(){
        return view('lock');
    }
        public function inicio(){
        return view('inicio');
    }
    public function loginJefe(){
        return view('loginJefe');
    }
    public function loginDepto(){
        return view('loginDepto');
    }

    public function ejemplo(){
        return view('ejemplo');
    }
}