<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Ali Akbar',
            'email' => 'ashiqzada1212@gmail.com',
            'password' => "$2y$10$./Gh2wUl4KrZinmolYdLo.wDkFZkUPOcvtkuCoq2vAWpB5x1syOsy",
            'is_admin'=> 1,
            'cnic' => null,
            'Time' => null,
            'Adm_date' => null,
            'address' => null,
            'more_info' => null,
            'email_verified_at' => null,
            'remember_token' => null,
            'created_at' => null,
            'updated_at'  => null


        ]);
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
