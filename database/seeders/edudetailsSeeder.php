<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class edudetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edudetails')->insert(
            [
                [
                    'edu_name' => 'Information Technology Engineering',
                    'detail' => 'DAMASCUS UNIVERSITY',
                    'education_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Basics of Network',
                    'detail' => 'NANS -- Damascus, Syria --2018',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Basics of Linux',
                    'detail' => 'MOSCOW, RUSSIA --2019',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Advance of Linux',
                    'detail' => 'MOSCOW, RUSSIA --2019',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Public key infrastructure',
                    'detail' => 'MOSCOW, RUSSIA --2019',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Basics of CEH',
                    'detail' => 'SSS -- Damascus, Syria --2020',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'edu_name' => 'Basics of PYTHON',
                    'detail' => 'SSS -- Damascus, Syria --2020',
                    'education_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
