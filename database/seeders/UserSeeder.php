<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Seeder;
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
        User::create([
            'user' => 'reindrairawan@gmail.com',
            'nama_driver' => 'Indra irawanto',
            'password' => Hash::make('secret'),
            'status' => 'aktif',
        ]);
    }
}
