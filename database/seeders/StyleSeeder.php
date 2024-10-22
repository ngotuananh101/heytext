<?php

namespace Database\Seeders;

use App\Models\Style;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class StyleSeeder extends Seeder
{
    public function run(): void
    {
        $jsonData = json_decode(file_get_contents(database_path('data/styles.json')));
        foreach ($jsonData as $style){
            Style::create([
                'title' => $style->title,
                'short_title' => $style->short_title,
                'slug' => $style->slug,
                'description' => $style->description,
                'content' => $style->content,
                'variant_code' => $style->variant_code
            ]);
        }
    }
}
