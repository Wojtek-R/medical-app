<?php

namespace Database\Seeders;

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

        // Seed admin user
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@app.medical.com',
            'password' => Hash::make('Password8'),
        ]);

        $this->call([
            TermsTableSeeder::class,
        ]);
    }
}
