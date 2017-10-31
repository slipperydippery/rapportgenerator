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
                'title' => 'Podiumkunsten - Informatievoorziening',
                'short' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'body' => '<p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>',
                'sector_id' => '1',
                'functie_id' => '1'
            ],
            [
                'title' => 'Podiumkunsten - Onderzoek & Ontwikkeling',
                'short' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'body' => '<p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>',
                'sector_id' => '1',
                'functie_id' => '2'
            ],
            [
                'title' => 'Film - Informatievoorziening',
                'short' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'body' => '<p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>',
                'sector_id' => '2',
                'functie_id' => '1'
            ],
            [
                'title' => 'Film - Onderzoek & Ontwikkeling',
                'short' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                'body' => '<p>Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Non nisi est sit amet. Neque volutpat ac tincidunt vitae semper. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nulla facilisi nullam vehicula ipsum a arcu. Maecenas pharetra convallis posuere morbi leo urna molestie at elementum. Facilisi morbi tempus iaculis urna id. Nec feugiat in fermentum posuere. Massa sed elementum tempus egestas sed sed. Sit amet consectetur adipiscing elit ut. Eget velit aliquet sagittis id consectetur purus ut. Elementum curabitur vitae nunc sed velit dignissim.</p>',
                'sector_id' => '2',
                'functie_id' => '2'
            ],
        ];

        DB::table('elements')->insert($elements);
    }
}
