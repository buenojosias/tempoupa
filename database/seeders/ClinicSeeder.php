<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    public function run(): void
    {
        $clinics = [
            [
                'city_id' => 1,
                'name' => 'Campo Comprido',
                'address' => 'Rua Monsenhor Ivo Zanlorenzi, 3495',
                'neighborhood' => 'Campo Comprido',
                'latitude' => -25.4422125,
                'longitude' => -49.3425097,
                'has_display' => true,
                'multilevel' => true,
                'capacity' => rand(50, 100),
                'rating' => 3.0,
            ],
            [
                'city_id' => 1,
                'name' => 'Boa Vista',
                'address' => 'Av. Paraná, 3654',
                'neighborhood' => 'Bacacheri',
                'latitude' => -25.3856994,
                'longitude' => -49.2354435,
                'has_display' => true,
                'multilevel' => true,
                'capacity' => rand(50, 100),
                'rating' => 2.6,
            ],
            [
                'city_id' => 1,
                'name' => 'Boqueirão',
                'address' => 'Rua Professora Maria de Assumpção, 2590',
                'neighborhood' => 'Boqueirão',
                'latitude' => -25.4929028,
                'longitude' => -49.2473377,
                'has_display' => true,
                'multilevel' => true,
                'capacity' => rand(50, 100),
                'rating' => 3.4,
            ],
            [
                'city_id' => 1,
                'name' => 'Fazendinha',
                'address' => 'R. Carlos Klemtz, 1883',
                'neighborhood' => 'Fazendinha',
                'latitude' => -25.4779167,
                'longitude' => -49.3304392,
                'has_display' => true,
                'multilevel' => true,
                'capacity' => rand(50, 100),
                'rating' => null,
            ],
            [
                'city_id' => 1,
                'name' => 'Pinheirinho',
                'address' => 'Rua Leon Nícolas, 2081',
                'neighborhood' => 'Capão Raso',
                'latitude' => -25.5152298,
                'longitude' => -49.2996645,
                'has_display' => true,
                'multilevel' => true,
                'capacity' => rand(50, 100),
                'rating' => null,
            ],
            [
                'city_id' => 2,
                'name' => 'Almirante Tamandaré',
                'address' => 'R. Lourenço Ângelo Buzato, 92',
                'neighborhood' => 'Vila Santa Terezinha',
                'latitude' => -25.3136425,
                'longitude' => -49.3002121,
                'has_display' => rand(0, 1),
                'multilevel' => rand(0, 1),
                'capacity' => rand(50, 100),
                'rating' => 3.5,
            ],
            [
                'city_id' => 5,
                'name' => 'Campo Largo',
                'address' => 'R. Francisco Xavier de Almeida Garret, 141',
                'neighborhood' => 'Abranche Guimaraes',
                'latitude' => -25.4693397,
                'longitude' => -49.5235551,
                'has_display' => rand(0, 1),
                'multilevel' => rand(0, 1),
                'capacity' => rand(50, 100),
                'rating' => null,
            ],
            [
                'city_id' => 9,
                'name' => 'Pinhais',
                'address' => 'R. Renato Nunes Ribas, 731',
                'neighborhood' => 'Centro',
                'latitude' => -25.4342926,
                'longitude' => -49.1966725,
                'has_display' => rand(0, 1),
                'multilevel' => rand(0, 1),
                'capacity' => rand(50, 100),
                'rating' => null,
            ],
            [
                'city_id' => 11,
                'name' => 'Afonso Pena',
                'address' => 'R. Francisca de Souza Cortês, 460',
                'neighborhood' => 'Parque da Fonte',
                'latitude' => -25.4975689,
                'longitude' => -49.1723329,
                'has_display' => rand(0, 1),
                'multilevel' => rand(0, 1),
                'capacity' => rand(50, 100),
                'rating' => 2.7,
            ],
            [
                'city_id' => 11,
                'name' => 'Rui Barbosa',
                'address' => 'Av. Rui Barbosa, 10471',
                'neighborhood' => 'Aristocrata',
                'latitude' => -25.550008,
                'longitude' => -49.2090912,
                'has_display' => rand(0, 1),
                'multilevel' => rand(0, 1),
                'capacity' => rand(50, 100),
                'rating' => null,
            ],
        ];

        Clinic::insert($clinics);
    }
}
