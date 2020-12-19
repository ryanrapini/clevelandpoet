<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Ryan Rapini',
            'email' => 'test@example.com',
            'photo_url' => 'https://www.gravatar.com/avatar/60619?d=wavatar&size=80',
            'password' => Hash::make('password'),
        ]);

        User::factory()->count(10)->create();
    }
}
