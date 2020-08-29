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
            'username' => 'jorem.belen',
            'role' => '1',
            // 'email' => 'jorembelen@gmail.com',
            'password' => bcrypt('password'),
        ]);

    }
}
