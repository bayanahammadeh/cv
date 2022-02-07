<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Database\Seeder;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert(
            [
                [
                    'project_name' => 'BAYAN HAMMADEH CV',
                    'project_url' => 'https://bayana.com',
                    'project_image' => 'cv.png',
                    'personal_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'project_name' => 'Tools',
                    'project_url' => 'https://tools.ecc.sy/',
                    'project_image' => 'tools.png',
                    'personal_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'project_name' => 'Telegram Bot',
                    'project_url' => 'https://t.me/NANS_NetworkServicesbot',
                    'project_image' => 'telegram.jpeg',
                    'personal_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'project_name' => 'Telegram Bot Dashboard',
                    'project_url' => 'https://adminbot.ecc.sy/',
                    'project_image' => 'adminbot.png',
                    'personal_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
            ]
        );

    }
}
