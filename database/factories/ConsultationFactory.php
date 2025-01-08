<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsultationFactory extends Factory
{
    public function definition(): array
    {
        $entry_time = $this->faker->dateTimeBetween('-1 month', 'now');
        $consultation_time = Carbon::parse($entry_time)->addMinutes(rand(30, 180));
        $departure_time = fake()->randomElement([null, Carbon::parse($consultation_time)->addMinutes(rand(10, 40))]);
        $status = $departure_time ? 5 : rand(1, 4);

        return [
            'clinic_id' => rand(1, 10),
            'entry_time' => $entry_time,
            'consultation_time' => $consultation_time,
            'departure_time' => $departure_time,
            'group' => fake()->randomElement(['G', 'P']),
            'classification' => $status === 1 ? null : rand(1, 4),
            'status' => $status,
        ];
    }
}
