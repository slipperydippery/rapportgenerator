<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SectorsTableSeeder::class);
        $this->call(FunctiesTableSeeder::class);
        $this->call(ElementsTableSeeder::class);
        $this->call(SpecialsTableSeeder::class);
    }
}
