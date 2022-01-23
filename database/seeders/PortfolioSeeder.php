<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([

            [
                "titre"=>" project Site du chef",
                "image"=>"img/site_chefs.png",
                "date"=>"17.09.21",
                "url"=>"https://github.com/philippeK22/cs-site-chef-20",
                "description"=>"language HTMl et CSS",
                "created_at"=>now()


            ],

            [
                "titre"=> "project calcuatrice",
                "image"=> "img/calculette.png",
                "date"=>"09.11.21",
                "url"=> "https://github.com/philippeK22/js-dom-calculatrice",
                "description"=>"language en Javascript",
                "created_at"=>now()

            ],

            [
                "titre"=>"project emporium ",
                "image"=>"img/emporium.png",
                "date"=>"18.12.21",
                "url"=>"https://github.com/philippeK22/Projet-JS-Emporium",
                "description"=>"language Javascript",
                "created_at"=>now()
            ],

            [
                "titre"=>"project todo list ",
                "image"=>"img/todolist.png",
                "date"=>"14.11.21",
                "url"=>"https://github.com/philippeK22/js_dom_todolist",
                "description"=>"language Javascript",
                "created_at"=>now()

            ],
            [
                "titre"=>"project E-commerce ",
                "image"=>"img/e_commerce.png",
                "date"=>"03.01.22",
                "url"=>"https://github.com/philippeK22/react_projet_ecommerce",
                "description"=>"language React",
                "created_at"=>now()
                
            ],

            [
                "titre"=>"project Data Base Laravel",
                "image"=>"img/template_laravel.png",
                "date"=>"15.01.22",
                "url"=>"https://github.com/gencehangurcam/laravel_projet_duo",
                "description"=>"language Php Laravel",
                "created_at"=>now()
            ]


        ]);
    }
}
