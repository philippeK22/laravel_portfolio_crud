<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $profils=Profil::all();

        return view("home",compact("profils"));
    }

    public function portfolio(){

        return view("portfolio");
    }

    public function admin(){

        return view("admin.dashboard");

    }
}
