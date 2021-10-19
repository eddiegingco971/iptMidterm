<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        [
            'lname'=>'Lenteria',
            'fname'=>'Benjie',
            'address'=>'Pob. Centro, Clarin, Bohol',
            'phone'=>'0909.454.7654',
            'email'=>'lenteriabenjie@yahoo.com',
            'password'=>bcrypt('password123')
        ],
        [
            'lname'=>'Reyes',
            'fname'=>'Angelie Mae',
            'address'=>'Lajog, Clarin, Bohol',
            'phone'=>'0921.654.3210',
            'email'=>'reyesangeliemae@yahoo.com',
            'password'=>bcrypt('password123')
        ],
        [
            'lname'=>'Bautista',
            'fname'=>'Roland Glenn',
            'address'=>'Ubojan, Tubigon, Bohol',
            'phone'=>'0904.544.7784',
            'email'=>'bautistarolandglenn@yahoo.com',
            'password'=>bcrypt('password123')
        ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
