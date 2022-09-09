<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee1 = Employee::query()->find(1);
        $employee1->salaries()->createMany([
            [
                'amount' => 122,
                'date' => date('2012-10-01 11:05:44'),
            ],
            [
                'amount' => 613,
                'date' => date('2032-12-01 11:05:44'),
            ],
            [
                'amount' => 953,
                'date' => date('2020-10-01 11:05:44'),
            ]
        ]);

        $employee2 = Employee::query()->find(2);
        $employee2->salaries()->createMany([
            [
                'amount' => 121,
                'date' => date('2022-10-01 11:05:44'),
            ],
            [
                'amount' => 600,
                'date' => date('2022-10-01 11:05:44'),
            ],
            [
                'amount' => 342,
                'date' => date('2022-10-01 11:05:44'),
            ]
        ]);

        $employee3 = Employee::query()->find(3);
        $employee3->salaries()->createMany([
            [
                'amount' => 865,
                'date' => date('2013-02-01 11:05:44'),
            ],
            [
                'amount' => 400,
                'date' => date('2016-03-01 11:05:44'),
            ],
            [
                'amount' => 322,
                'date' => date('2015-04-01 11:05:44'),
            ]
        ]);

    }
}
