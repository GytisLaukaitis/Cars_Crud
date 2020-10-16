<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('customers')->insert([
            [
            'name' => 'Gytis',
            'surname' => 'Laukaitis',
            'phone' => '860235995',
            'email' => 'gytislaukaitis@gmail.com',
            'comment' => 'Awesome cars makers',
            'car_id' => '5',
            ],
            [
                'name' => 'Vincentas',
                'surname' => 'Jankauskas',
                'phone' => '846280169',
                'email' => 'vincenas@gmail.com',
                'comment' => 'Awesome cars makers',
                'car_id' => '5',
                ],
                [
                    'name' => 'Eligijus',
                    'surname' => 'Kateiva',
                    'phone' => '862748706',
                    'email' => 'eligijva@gmail.com',
                    'comment' => 'Awesome cars makers',
                    'car_id' => '1',
                    ],
                    [
                        'name' => 'Liu',
                        'surname' => 'E veliz',
                        'phone' => '734235678',
                        'email' => 'nhs5x850nz@temporary-mail.net',
                        'comment' => 'Awesome cars makers',
                        'car_id' => '2',
                        ],
                        [
                            'name' => 'Jose',
                            'surname' => 'Carlos Muñoz',
                            'phone' => '734835995',
                            'email' => 'carlos@gmail.com',
                            'comment' => 'Awesome cars makers',
                            'car_id' => '1',
                            ],
                            [
                                'name' => 'Agustina',
                                'surname' => 'Joaquín',
                                'phone' => '6879235995',
                                'email' => 'whimsy@comcast.net',
                                'comment' => 'Awesome cars makers',
                                'car_id' => '3',
                                ],
                                [
                                    'name' => 'Vladimir',
                                    'surname' => 'Putin',
                                    'phone' => '000000000000',
                                    'email' => 'hahsler@hotmail.com',
                                    'comment' => 'Awesome cars makers',
                                    'car_id' => '3',
                                    ],
                                    [
                                        'name' => 'Moskovskaya',
                                        'surname' => 'Absolutovna',
                                        'phone' => '111111111',
                                        'email' => 'tbeck@me.com',
                                        'comment' => 'Awesome cars makers',
                                        'car_id' => '4',
                                        ],
                                        [
                                            'name' => 'Vadims',
                                            'surname' => 'Karnickis',
                                            'phone' => '597668942',
                                            'email' => 'drolsky@yahoo.ca',
                                            'comment' => 'Awesome cars makers',
                                            'car_id' => '2',
                                            ],
        ]);
    }
}
