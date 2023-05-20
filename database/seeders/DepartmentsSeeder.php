<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Departments;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departments::create(
            [
                "name"       =>    "NeoroScience"
            ]

        );
        Departments::create(
            [
                "name"       =>    "Dentis"
            ]

        );
    }
}
