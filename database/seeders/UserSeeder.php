<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
            'name'=>'Lynda Carter',
            'email'=>'Lynda@Carter.com',
            'password'=>Hash::make('12345') 
            ],
            [
            'name'=>'Van Nguyen',
            'email'=>'Van@Nguyen.com',
            'password'=>Hash::make('12345')  
            ],
            [
            'name'=>'shrek swamp',
            'email'=>'shrek@swamp.com',
            'password'=>Hash::make('12345')
            ],
            [
            'name'=>'Eddie Donkey',
            'email'=>'Eddie@Donkey.com',
            'password'=>Hash::make('12345')
            ],
            [
            'name'=>'Birdemic 2',
            'email'=>'Birdemic@2.com',
            'password'=>Hash::make('12345')
            ]
        ]);
    }
}
