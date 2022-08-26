<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'firstname' => 'Admin',
            'email' => 'admin@led-werbeflaechen.de',
            'password' => Hash::make('aaaaaaaa'),
        ]);
        $user->assignRole('Admin');
    }
}
