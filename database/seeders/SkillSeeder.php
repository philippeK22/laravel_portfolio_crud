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
                "description"=>"Je suis
                Développeur web junior, je recherche un emploi après avoir passé 6 mois de formation dans une startup web qui est molengeek. Cette expérience m’a permis d’acquérir autonomie et confiance en moi, malgré le fait que je n'avais aucune base approfondie. J’ai ainsi pu renforcer ce que j’ai appris lors de ma formation professionnelle, et étoffer mon panel de compétences.

                 Autonome de nature, je peux travailler seule ou en groupe, étant également capable de m’adapter à un environnement que je ne connais pas. Je sais faire preuve de force de proposition lorsque l’on m’en donne la liberté, cherchant toujours à améliorer et optimiser les projets au maximum pour satisfaire au mieux la demande du client. L’optimisation du code fait partie de mes priorités.",
                "created_at"=>now()

            ],

        ]);
    }
}
