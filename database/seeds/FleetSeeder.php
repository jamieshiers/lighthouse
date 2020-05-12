<?php

use App\Models\Fleet;
use Illuminate\Database\Seeder;

class FleetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Arcadia',
                'ship_code' => 'AC',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Aurora',
                'ship_code' => 'AU',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Azura',
                'ship_code' => 'AZ',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Britannia',
                'ship_code' => 'BR',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Iona',
                'ship_code' => 'IO',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Oceana',
                'ship_code' => 'OC',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'P&O Cruises',
                'ship_name' => 'Ventura',
                'ship_code' => 'VE',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'Cunard',
                'ship_name' => 'Queen Mary 2',
                'ship_code' => 'QM',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'Cunard',
                'ship_name' => 'Queen Victoria',
                'ship_code' => 'QV',
            ]
        );

        Fleet::create(
            [
                'fleet' => 'Cunard',
                'ship_name' => 'Queen Elizabeth',
                'ship_code' => 'QE',
            ]
        );
    }
}
