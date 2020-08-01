<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Asset;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jorem Belen',
            'email' => 'jorembelen@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Asset::create([
            'ritcco' => '30-00235',
            'type' => 'Desktop',
            'description' => 'HP PRO 500 MT',
            'serial_number' => 'TRF2080785',
            'status' => '0',
            'asset_number' => 'RCLCD-00235',
        ]);

        Asset::create([
            'ritcco' => '30-00226',
            'type' => 'Desktop',
            'description' => 'HP 3400 MT',
            'serial_number' => 'TRF20807V5',
            'status' => '0',
            'asset_number' => 'RCLCD-00225',
        ]);

        // Employee::create([
        //     'name' => 'Jorem Belen',
        //     'badge' => '31037172',
        //     'designation' => 'IT - Support',
        //     'nationality' => 'PH',
        //     'location' => 'DRSD Building Construction',
        //     'unit_code' => '31428',
        // ]);

        // Employee::create([
        //     'name' => 'Arnel Palma',
        //     'badge' => '31037175',
        //     'designation' => 'Programmer',
        //     'nationality' => 'PH',
        //     'location' => 'DRSD Building Construction',
        //     'unit_code' => '31428',
        // ]);

        // Employee::create([
        //     'name' => 'Ramjan Ali',
        //     'badge' => '30035895',
        //     'designation' => 'Programmer',
        //     'nationality' => 'IN',
        //     'location' => 'DRSD Building Construction',
        //     'unit_code' => '31428',
        // ]);
        // Employee::create([
        //     'name' => 'Masoud Eid Abdullah Al Hamdi',
        //     'badge' => '30035902',
        //     'designation' => 'Programmer',
        //     'nationality' => 'EG',
        //     'location' => 'DRSD Building Construction',
        //     'unit_code' => '31428',
        // ]);
        // Employee::create([
        //     'name' => 'Selvaraj Alagu',
        //     'badge' => '30035918',
        //     'designation' => 'Programmer',
        //     'nationality' => 'IN',
        //     'location' => 'DRSD Building Construction',
        //     'unit_code' => '31428',
        // ]);

    }
}
