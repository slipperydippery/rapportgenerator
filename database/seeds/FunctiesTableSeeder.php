<?php

use Illuminate\Database\Seeder;

class FunctiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('functies')->delete();

        $functies = [
            [
            	'title' => 'Informatievoorziening',
            	'description' => 'kennis & informatie / verzameling & verspreiding',
            	'introduction' => ''
            ],
            [
            	'title' => 'Onderzoek & Ontwikkeling',
            	'description' => 'verkenning, duiding, monitoring & evaluatie',
            	'introduction' => ''
            ],
            [
            	'title' => 'Beheer & Ontsluiting',
            	'description' => 'zorg voor erfgoed, collecties & archieven',
            	'introduction' => ''
            ],
            [
            	'title' => 'Vertegenwoordiging',
            	'description' => 'zichtbaarheid & promotie',
            	'introduction' => ''
            ],
            [
            	'title' => 'Netwerkactivering',
            	'description' => 'ontmoeting & uitwisseling, debat & reflectie',
            	'introduction' => ''
            ],
            [
            	'title' => 'Beleidsondersteuning',
            	'description' => 'agendering & uitvoering',
            	'introduction' => ''
            ],
            [
            	'title' => 'Deskundigheidsbevordering',
            	'description' => 'professionalisering in en rond de sector',
            	'introduction' => ''
            ],

        ];

        DB::table('functies')->insert($functies);
    }
}
