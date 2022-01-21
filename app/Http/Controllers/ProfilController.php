<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){

        return view("admin.profils.main");

    }

    public function admin(){

        return view("admin.dashboard");
        
    }
}
