<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SensorData;

class SensorDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sensorData = [
            ['waterflow_rate' => 1800], // 1.8 Liter
            ['waterflow_rate' => 2300], // 2.3 Liter
            ['waterflow_rate' => 2000], // 2.0 Liter
            ['waterflow_rate' => 3000], // 3.0 Liter
            ['waterflow_rate' => 2400], // 2.4 Liter
            ['waterflow_rate' => 2000], // 2.0 Liter
            ['waterflow_rate' => 1900], // 1.9 Liter
            ['waterflow_rate' => 2300], // 2.3 Liter
            ['waterflow_rate' => 2400], // 2.4 Liter
            ['waterflow_rate' => 3000], // 3.0 Liter
        ];

        foreach ($sensorData as $data) {
            SensorData::create($data);
        }
    }
}
