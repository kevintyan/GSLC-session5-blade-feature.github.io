<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students')->insert([
            [
                'name' => 'Kevin Tyan',
                'gender' => 'Male',
                'phone_number' => '081280003909',
                'course' => 'Web Programming'
            ],
            [
                'name' => 'Rendy Pramudy',
                'gender' => 'Male',
                'phone_number' => '081282340944',
                'course' => 'Linear Algebra'
            ],
            [
                'name' => 'Hanif Rifqi',
                'gender' => 'Male',
                'phone_number' => '081200394812',
                'course' => 'Operating System'
            ],
            [
                'name' => 'Krisna Hadi',
                'gender' => 'Male',
                'phone_number' => '081209481166',
                'course' => 'Data Visualization'
            ]
        ]);
    }
}
