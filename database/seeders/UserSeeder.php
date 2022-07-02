<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = User::create([
            'name'=> 'admin',
            'email' => 'chancelinea32@gmail.com',
            'password' => bcrypt('adminadmin'),
            'email_verified_at' => Carbon::parse('2022-04-14')
        ]);

        $user->assignRole('Admin');

        User::factory(50)->create();

    }
}
