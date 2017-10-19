<?php

use Illuminate\Database\Seeder;

class ElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('elements')->delete();

        $elements = [
            [
            	'title' => '',
            	'description' => ''
            ],

        ];

        DB::table('elements')->insert($elements);
    }
}
