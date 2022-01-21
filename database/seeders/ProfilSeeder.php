<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profils')->insert([
            [
                "nom"=>"kanengele",
                "prenom"=>"philippe",
                "age"=> 26,
                "titre"=>"Mon portfolio",
                "email"=>"kanengelephilippe@gmail.com",
                "adresse"=>"rue de laeken 12 1000 Bruxelles",
                "description"=>"mon premier cv en ligne",
                "telephone"=>486423129,

                "created_at"=>now()


            ],
        ]);
    }
}
