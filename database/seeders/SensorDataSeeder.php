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
            ['waterflow_rate' => 1.8],
            ['waterflow_rate' => 2.3],
            ['waterflow_rate' => 2.0],
            ['waterflow_rate' => 3.0],
            ['waterflow_rate' => 2.4],
            ['waterflow_rate' => 2.0],
            ['waterflow_rate' => 1.9],
            ['waterflow_rate' => 2.3],
            ['waterflow_rate' => 2.4],
            ['waterflow_rate' => 3.0],
        ];

        foreach ($sensorData as $data) {
            SensorData::create($data);
        }
    }
}
