<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
                'name' => 'Justin Ajith',
                'email' => 'admin@gmail.com',
                'phone' => '1234567890',
                'type' => 'admin',
                'password' => Hash::make('ajith1')
            ],
            [
                'name' => 'Frank Lampard',
                'email' => 'user@gmail.com',
                'phone' => '1234567890',
                'type' => 'user',
                'password' => Hash::make('ajith1')
            ],
            [
                'name' => 'Tooku Thurai',
                'email' => 'worker@gmail.com',
                'phone' => '1234567890',
                'type' => 'worker',
                'password' => Hash::make('ajith1')
            ]
        ];
        DB::table('users')->insert($data);
    }
}
