<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Profil;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $profils=Profil::all();
        $skills= Skill::all();
        $portfolios= Portfolio::all();

        return view("home",compact("profils","skills","portfolios"));
    }

    public function portfolio(){

        return view("portfolio");
    }

    public function admin(){

        return view("admin.dashboard");

    }
}
