<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PayrollType;

class PayrollTypeSeeder extends Seeder
{
    public function run(): void
    {
        PayrollType::create([
            'name_type' => 'Haberes',
        ]);

        PayrollType::create([
            'name_type' => 'Jornales',
        ]);
    }
}

