<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('car_models')->insert([
            [
            'title' => 'S 60',
            'yearsReleased' => '2000',
            'topSpeed' => '260',
            'price' => '36490',
            'description' => 'Unlike some rival sedans that compromise luxury for performance and vice-versa, the 2020 Volvo S60 gracefully balances both virtues.',
            'car_id' => '1',
            ],
            [
                'title' => 'X6',
                'yearsReleased' => '2008',
                'topSpeed' => '280',
                'price' => '64300',
                'description' => 'The BMW X6 is a mid-size luxury crossover by German automaker BMW.',
                'car_id' => '2',
                ],
                [
                    'title' => 'Benz W187',
                    'yearsReleased' => '1951',
                    'topSpeed' => '140',
                    'price' => '45000',
                    'description' => 'The Mercedes-Benz W187 is a luxury car produced by Mercedes-Benz from 1951 to 1955.',
                    'car_id' => '3',
                    ],
                    [
                        'title' => 'Fiesta',
                        'yearsReleased' => '1976',
                        'topSpeed' => '200',
                        'price' => '21000',
                        'description' => 'The Ford Fiesta is a supermini marketed by Ford since 1976 over seven generations.',
                        'car_id' => '4',
                        ],
                        [
                            'title' => 'Mustang',
                            'yearsReleased' => '2014',
                            'topSpeed' => '320',
                            'price' => '73450',
                            'description' => 'The Ford Mustang is a series of American automobiles manufactured by Ford. In continuous production since 1964, the Mustang is currently the longest-produced Ford car nameplate.',
                            'car_id' => '4',
                            ],
                            [
                                'title' => 'XC90 T8',
                                'yearsReleased' => '2002',
                                'topSpeed' => '230',
                                'price' => '17560',
                                'description' => 'The Volvo XC90 is a mid-size luxury crossover SUV manufactured and marketed by Volvo Cars since 2002 and now in its second generation.',
                                'car_id' => '1',
                                ],
                                [
                                    'title' => 'Veyron',
                                    'yearsReleased' => '2005',
                                    'topSpeed' => '431',
                                    'price' => '3000000',
                                    'description' => 'The Bugatti Veyron EB 16.4 is a mid-engine sports car, designed and developed in Germany by the Volkswagen Group and manufactured in Molsheim, France, by French automobile manufacturer Bugatti.',
                                    'car_id' => '5',
                                    ],
                                    [
                                        'title' => 'Chiron',
                                        'yearsReleased' => '2018',
                                        'topSpeed' => '420',
                                        'price' => '2998000',
                                        'description' => 'The Bugatti Chiron is a mid-engine two-seater sports car developed and manufactured in Molsheim, France by French automobile manufacturer Bugatti Automobiles S.A.S',
                                        'car_id' => '5',
                                        ],
                                        [
                                            'title' => 'Divo',
                                            'yearsReleased' => '2019',
                                            'topSpeed' => '380',
                                            'price' => '5100000',
                                            'description' => 'The car is named after French racing driver Albert Divo, who raced for Bugatti in the 1920s winning the Targa Florio race twice.',
                                            'car_id' => '5',
                                            ],
           
        ]);
    }
}
