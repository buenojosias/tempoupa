<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    public $cities = [
        [ 'metropolitan_region_id' => 1, 'name' => 'Curitiba' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Almirante Tamandaré' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Araucária' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Campina Grande do Sul' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Campo Largo' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Campo Magro' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Colombo' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Fazenda Rio Grande' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Pinhais' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'Piraquara' ],
        [ 'metropolitan_region_id' => 1, 'name' => 'São José dos Pinhais' ],
    ];

    public function run(): void
    {
        City::insert($this->cities);
    }
}
