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
            'user' => 'reindra2',
            'nama_driver' => 'Indra irawanto2',
            'password' => Hash::make('secret'),
            'status' => 'aktif',
            'no_ktp' =>'3513181206980001',
        ]);
    }
}
