<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Prilient',
            'last_name' => 'Technologies',
            'email' => 'admin@gmail.com',
            'phone_number' => '',
            'email_verified_at' => '1',
            'password' => bcrypt('JwQ8*u$Sr$sR'),
        ]);
    }
}
