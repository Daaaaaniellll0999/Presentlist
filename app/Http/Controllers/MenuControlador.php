<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuControlador extends Controller
{
    //
    public function opcInicio(){
        return view('inicio');
    }
    public function opnConocenos(){
        return view('conocenos');
    }
    public function opcconsultadocentes(){
        return view('consultadocentes');
    }
    public function opcregistrodocentes(){
        return view('registrodocentes');
    }
    public function opcconsultaalumnos(){
        return view('consultaalumnos');
    }
    public function opcregistroalumnos(){
        return view('registroalumnos');
    }
}
