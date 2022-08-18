<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            'name' => 'Luna',
            'email' => 'moonbiscuit@gmail.com',
            'password' => Hash::make('sausainis')
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin1234'),
            'role' => 10
        ]);


        DB::table('branches')->insert([
            'address' => 'Somewhere, probably',
            'name' => 'Branch 1',
            'phone_number' => 861111111
        ]);

        DB::table('branches')->insert([
            'address' => 'Somewhere, almost certainly',
            'name' => 'Branch 2',
            'phone_number' => 862222222
        ]);


        DB::table('services')->insert([
            'name' => 'Gently stroke the vehicle',
            'duration' => '01:00:00',
            'price' => 5.20
        ]);


        DB::table('mechanics')->insert([
            'name' => 'Big',
            'surname' => 'Chongus',
            'branch_id' => 1,
        ]);
        
    }
}
