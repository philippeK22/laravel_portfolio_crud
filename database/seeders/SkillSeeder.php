<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([

            [
                "language"=>"HTML",
                "pourcentage"=> 90,
                "description"=>"mes skills",
                "created_at"=>now()

            ],

            [
                "language"=>"CSS",
                "pourcentage"=> 90,
                "description"=>"apprentissage css",
                "created_at"=>now()

            ],

            [
                "language"=>"PHP, LARAVEL",
                "pourcentage"=> 50,
                "description"=>"mes skills",
                "created_at"=>now()

            ],

            [
                "language"=>"JAVASCRIPT",
                "pourcentage"=> 90,
                "description"=>"apprentissage JS",
                "created_at"=>now()

            ],

            [
                "language"=>"REACT",
                "pourcentage"=> 80,
                "description"=>"apprentissage react lorem...",
                "created_at"=>now()

            ],
        ]);
    }
}
