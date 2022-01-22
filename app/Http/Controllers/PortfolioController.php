<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $myPortfolio=Portfolio::all();


        return view("admin.portfolios.main",compact("myPortfolio"));

    }

    public function create(){

        return view("admin.portfolios.create");
       }
       public function store(request $request){

        $portfolios = new Portfolio();
        $portfolios->titre=$request->titre;
        $portfolios->image=$request->image;
        $portfolios->date=$request->date;
        $portfolios->url=$request->url;
        $portfolios->description=$request->description;
        $portfolios->save();

        return redirect()->route("portfolios.index");

    }
    public function destroy(Portfolio $id){
        $id->delete();
        return redirect()->route("portfolios.index");

    }

    public function show(Portfolio $id){

        return view("admin.portfolios.show",compact("id"));

       }

       public function edit(Portfolio $id){

        return view("admin.portfolios.edit",compact("id"));

       }

       public function update(request $request,Portfolio $id){

        $id->titre=$request->titre;
        $id->image=$request->image;
        $id->date=$request->date;
        $id->url=$request->url;
        $id->description=$request->description;
        $id->save();

        return redirect()->route("portfolios.index");


       }


}
