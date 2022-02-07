<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert(
            [
                [
                    'job_header' => 'FULL STACK Developer',
                    'description' => 'Experience in front-end development, code the front-end of a
                    website, bring the web designer’s design to life, and ensure
                    responsive design.
                    Experience in back-end development, work behind-the-scene,
                    building and maintain the technology needed to power the
                    front-end, ensure that everything the front-end developer builds
                    is fully functional.
                    Create and manage the database.
                    ',
                    'experience_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'job_header' => 'LINUX',
                    'description' => 'Ability writing Linux script.',
                    'experience_id' => '1',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'job_header' => 'VULNERABILITY SCANNING TOOLS',
                    'description' => 'Experience in using Vulnerability scanning tools like, Yaazhini,
                    Ostorlab, Wireshark, Acunetix, Burp suite.',
                    'experience_id' => '2',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
                [
                    'job_header' => 'DESKTOP APPLICATION PRGRAMMING',
                    'description' => 'Programming several desktop programs.',
                    'experience_id' => '3',
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],

            ]
        );
    }
}
