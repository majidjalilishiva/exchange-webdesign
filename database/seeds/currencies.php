<?php

use Illuminate\Database\Seeder;

class currencies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [

                "name" => "ریال"
            ],
            [

                "name" => "دلار آمریکا"
            ],
            [

                "name" => "یورو"
            ]
        ];

        foreach ($currencies as $currency) {
            App\currency::updateOrCreate($currency);
        };

    }
}
