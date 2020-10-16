<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('cars')->insert([
            [
            'title' => 'Volvo',
            'madein' => 'Sweden',
            'description' => 'The Volvo Group is a manufacturer of trucks, buses, construction equipment, diesel engines, and marine and industrial engines.',
            ],
            [
                'title' => 'BMW',
                'madein' => 'Germany',
                'description' => 'Bayerische Motoren Werke AG engages in the manufacture and sale of automobiles and motorcycles.',
                ],
                [
                    'title' => 'Mercedes',
                    'madein' => 'Germany',
                    'description' => 'Mercedes-Benz AG is responsible for the global business of Mercedes-Benz Cars and Mercedes-Benz Vans with over 173,000 employeesworldwide.',
                    ],
                    [
                        'title' => 'Ford',
                        'madein' => 'USA',
                        'description' => 'Ford Motor Company is a global automotive and mobility company. The Company`s business includes designing, manufacturing, marketing, and servicing a full line of Ford cars, trucks, and sport utility vehicles (SUVs), as well as Lincoln luxury vehicles.',
                        ],
                        [
                            'title' => 'Bugatti',
                            'madein' => 'Italy',
                            'description' => 'Bugatti Automobiles SAS manufactures automobiles. The Company designs passenger cars, sports vehicles, and utility vans, as well as supplies spar parts. Bugatti Automobiles serves customers worldwide.',
                            ],
             
        ]);
    }
}
