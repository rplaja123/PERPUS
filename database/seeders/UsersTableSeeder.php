<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;




class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Admin
        $admin = User::factory()->create([

            'name'     => 'Admin',
            'email'    => 'Admin@mail.com',
            'alamat'   =>  'alam',
            'nis'      => '1',
            'no_handphone' => '12',
            'password' => bcrypt('mail'),
        ]);
        $admin->assignRole('admin');

        

         // User
         $siswa = user::factory()->create([

            'name'     => 'siswa',
            'email'    => 'siswa@mail.com',
            'alamat'   =>  'alam',
            'nis'      => '1',
            'no_handphone' => '123',
            'password' => bcrypt('mail'),
        ]);
        $siswa->assignRole('siswa');
    }

}