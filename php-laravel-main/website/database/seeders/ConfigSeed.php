<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config = Config::factory()->count(3)->create();
    }
}
