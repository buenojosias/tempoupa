<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealtimeSeeder extends Seeder
{
    public function run(): void
    {
        $clinics = Clinic::all();

        foreach ($clinics as $clinic) {
            $tb = rand(30, 300);
            $tg = rand(30, 300);
            $ty = rand(30, 120);
            $tr = rand(10, 30);
            $ta = ($tb + $tg + $ty + $tr) / 4;

            $clinic->realtimes()->create([
                'type' => 'time',
                'group' => 'G',
                'blue' => $tb,
                'green' => $tg,
                'yellow' => $ty,
                'red' => $tr,
                'total' => $ta,
            ]);

            $qb = rand(0, 20);
            $qg = rand(0, 20);
            $qy = rand(0, 10);
            $qr = rand(0, 5);
            $qt = ($qb + $qg + $qy + $qr);
            $ocupation = $qt / $clinic->capacity;

            if ($ocupation < 0.25) {
                $situation = 'T';
            } elseif ($ocupation < 0.5) {
                $situation = 'M';
            } elseif ($ocupation < 0.8) {
                $situation = 'L';
            } else {
                $situation = 'S';
            }

            $clinic->realtimes()->create([
                'type' => 'quantity',
                'group' => 'G',
                'blue' => $qb,
                'green' => $qg,
                'yellow' => $qy,
                'red' => $qr,
                'total' => $qt,
                'situation' => $situation,
            ]);
        }
    }
}
