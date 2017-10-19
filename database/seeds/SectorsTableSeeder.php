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
            	'title' => 'Film',
            	'description' => '',
            	'introduction' => ''
            ],
            [
            	'title' => 'Cultuureducatie',
            	'description' => '',
            	'introduction' => ''
            ],
            [
            	'title' => 'Erfgoed',
            	'description' => '',
            	'introduction' => ''
            ],
            [
            	'title' => 'Creatieve industrie',
            	'description' => '',
            	'introduction' => ''
            ],
            [
            	'title' => 'Cultuurbeleid',
            	'description' => '',
            	'introduction' => ''
            ]

        ];

        DB::table('sectors')->insert($sectors);
    }
}
