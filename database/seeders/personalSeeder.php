<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class personalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        DB::table('personals')->insert([

            'fname' => 'Bayan',

            'lname' => 'Hammadeh',

            'title' => 'Back End Developer ',

            'aboutme' => ' Hello! I am Bayan Hammadeh. Back End Developer.

            I am a professional Back-End Web Developer. I have an experience of more than 4 years on front-end and back-end technologies. I will create a responsive and professional customized website or web application that will develop the interest of the viewers to browse your stuff. I will give quality work to my clients. ',

            'email' => 'newb.hamada@gmail.com',

            'mobile' => '+963-940-212527',

            'phone' => '',

            'address' => 'Damascus, Syria',

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),

            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);

    }
}
