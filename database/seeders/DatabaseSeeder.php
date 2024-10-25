<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $fonts = [
            [
                'name' => 'Fantasya',
                'slug' => 'fantasya',
                'url' => 'assets/fonts/DFVN Fantasya.otf',
                'author' => 'Graphicdome',
                'format' => 'opentype'
            ],
            [
                'name' => 'Pencerio',
                'slug' => 'pencerio',
                'url' => 'assets/fonts/DFVN Pencerio.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
            [
                'name' => 'Glassure',
                'slug' => 'glassure',
                'url' => 'assets/fonts/DFVN Glassure.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
            [
                'name' => 'Les Palmiers',
                'slug' => 'les-palmiers',
                'url' => 'assets/fonts/DFVN Les Palmiers.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
            [
                'name' => 'Sarion',
                'slug' => 'sarion',
                'url' => 'assets/fonts/DFVN Sarion.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
            [
                'name' => 'TAN - HARMONI',
                'slug' => 'tan-harmoni',
                'url' => '/assets/fonts/DFVN TAN - HARMONI.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
            [
                'name' => 'Ganh Type',
                'slug' => 'ganh-type',
                'url' => 'assets/fonts/Ganh Type - Regular.otf',
                'author' => 'n/a',
                'format' => 'opentype'
            ],
        ];

        foreach ($fonts as $font){
            \App\Models\Font::create($font);
        }
    }
}
