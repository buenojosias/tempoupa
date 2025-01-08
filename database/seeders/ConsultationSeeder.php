<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        $users->each(function (User $user) {
            Consultation::factory()->count(rand(0, 3))->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
