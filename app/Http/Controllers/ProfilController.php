<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
       

        return view("admin.profils.main");

    }

   public function create(){

    return view("admin.profils.create");
   }

}
