<?php

namespace Database\Seeders;

use App\Models\MetropolitanRegion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetropolitanRegionSeeder extends Seeder
{
    public function run(): void
    {
        MetropolitanRegion::create([
            'state_id' => '1',
            'name' => 'Curitiba',
        ]);
    }
}
