<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Scan fonts folder
        $folder = public_path('assets/fonts');
        $files = scandir($folder);
        foreach ($files as $file){
            if ($file != '.' && $file != '..'){
                $font = explode('.', $file);
                $font = $font[0];
                if (!\App\Models\Font::where('name', $font)->first()){
                    \App\Models\Font::create([
                        'name' => $font,
                        'slug' => Str::slug($font),
                        'url' => 'assets/fonts/'.$file,
                        'author' => 'n/a',
                        'format' => $font[1] == 'otf' ? 'opentype' : 'truetype'
                    ]);
                }
            }
        }
    }
}
