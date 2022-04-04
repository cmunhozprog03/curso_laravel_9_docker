<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Chrsitovam Munhoz',
            'email' => 'cmunhozprog03@hotmail.com',
            'password' => bcrypt('Georgia*90')
        ]);
    }
}
