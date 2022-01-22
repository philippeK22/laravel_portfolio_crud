<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        $myProfil=Profil::all();


        return view("admin.profils.main",compact("myProfil"));

    }

   public function create(){

    return view("admin.profils.create");
   }

   public function store(request $request){
       $profils = new Profil();
       $profils->nom =$request->nom;
       $profils->prenom =$request->prenom;
       $profils->age =$request->age;
       $profils->titre =$request->titre;
       $profils->email =$request->email;
       $profils->telephone =$request->telephone;
       $profils->save();

       return redirect()->route("profils.index");

   }

   public function destroy(Profil $id){
       $id->delete();
       return redirect()->route("profils.index");

   }

   public function show(Profil $id){

    return view("admin.profils.show",compact("id"));

   }

   public function edit(Profil $id){

    return view("admin.profils.edit",compact("id"));

   }

   public function update(request $request, Profil $id){

    $id->nom =$request->nom;
    $id->prenom =$request->prenom;
    $id->age =$request->age;
    $id->titre =$request->titre;
    $id->email =$request->email;
    $id->telephone =$request->telephone;
    $id->save();

    return redirect()->route("profils.index");


   }
   


}
