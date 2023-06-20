<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Region;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            [
                'name' => 'Bogra',
                'field_force' => 'Nur Mohammad Talukder',
                'designation' => 'RM'
            ],
            [
                'name' => 'Rangpur',
                'field_force' => 'Mr. Emam Hossain',
                'designation' => 'RM'
            ],
            [
                'name' => 'Dhaka',
                'field_force' => 'Mr. Rubel Miah',
                'designation' => 'AM'
            ],
            [
                'name' => 'Cumilla',
                'field_force' => 'Mr. Omar Farooq Patwary',
                'designation' => 'RM'
            ],
            [
                'name' => 'Jhenaidah',
                'field_force' => 'Mr.Sabuj Hossain',
                'designation' => 'RM'
            ],
        ];

        $areas = [
            [
                'name' => 'Dupchacia',
                'field_force' => 'Saiful Islam',
                'designation' => 'AM'
            ],
            [
                'name' => 'Naogaon',
                'field_force' => 'Moklesur Rahman',
                'designation' => 'AM'
            ],
        ];

        foreach($regions as $region){
            Region::create($region);
        }
        foreach($areas as $area){
            Area::create($area);
        }
    }
}
