<?php

namespace Database\Seeders;

use App\Models\Combining;
use Illuminate\Database\Seeder;

class CombiningSeeder extends Seeder
{
    public function run(): void
    {
        $jsonData = json_decode(file_get_contents(database_path('data/combinings.json')));
        foreach ($jsonData as $combining){
            Combining::create([
                'name' => $combining->name,
                'code' => $combining->code,
            ]);
        }
    }
}
