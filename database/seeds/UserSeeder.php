<?php

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
        DB::table('users')->insert([
            'username' => 'admin',
            "nama_lengkap" => "Admin",
            "nim" => "000001",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            "level" => "admin"
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            "nama_lengkap" => "user",
            "nim" => "123456789",
            'email' => 'user@gmail.com',
            'password' => Hash::make('user12345'),
            "level" => "user"
        ]);
    }
}
