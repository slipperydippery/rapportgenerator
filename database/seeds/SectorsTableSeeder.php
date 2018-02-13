<?php

use Illuminate\Database\Seeder;

class SectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sectors')->delete();

        $sectors = [
            [
                'title' => 'Podiumkunsten',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Beeldende Kunst',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Erfgoed',
                'description' => '',
                'introduction' => ''
            ],
            [
            	'title' => 'Film',
            	'description' => '',
            	'introduction' => ''
            ],
            [
            	'title' => 'Creatieve industrie',
            	'description' => '',
            	'introduction' => ''
            ],
            [
                'title' => 'Letteren & Bibliotheken',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Bovensectoraal Beleid',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Bovensectoraal Digitalisering',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Bovensectoraal Ondernemerschap',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Bovensectoraal Internationalisering',
                'description' => '',
                'introduction' => ''
            ],
            [
                'title' => 'Bovensectoraal Cultuureducatie & Cultuurparticipatie',
                'description' => '',
                'introduction' => ''
            ],

        ];

        DB::table('sectors')->insert($sectors);
    }
}
