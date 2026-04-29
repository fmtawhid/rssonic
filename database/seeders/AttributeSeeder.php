<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            // Machine attributes (6)
            ['name' => 'Production Capacity (units/hour)'],
            ['name' => 'Temperature Range (°C)'],
            ['name' => 'Power Consumption (kW)'],
            ['name' => 'Maximum Mold Size'],
            ['name' => 'Automation Level'],
            ['name' => 'Certification'],
            
            // Raw Material attributes (6)
            ['name' => 'Material Grade'],
            ['name' => 'Viscosity (cP)'],
            ['name' => 'Color Options'],
            ['name' => 'Shelf Life (months)'],
            ['name' => 'Food Grade / Safety Certification'],
            ['name' => 'Density (g/cm³)'],
        ];

        foreach ($attributes as $attribute) {
            Attribute::firstOrCreate(
                ['name' => $attribute['name']],
                ['name' => $attribute['name']]
            );
        }
    }
}
