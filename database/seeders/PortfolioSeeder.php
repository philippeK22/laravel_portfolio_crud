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
                "nom"=>"Site du chef",
                "image"=>"img/portfolio-details-1.jpg",
                "date"=>"17.09.21",
                "url"=>"https://github.com/philippeK22/cs-site-chef-20",
                "description"=>"lorem lorem",
                "created_at"=>now()


            ],
        ]);
    }
}
