<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $time = Carbon::now();
        foreach(['Drama', 'Horror', 'Comedy', 'Action', 'Sci-fi'] as $cat){
            DB::table('categories')->insert([
                'title' => $cat,
                'created_at' => $time->addSeconds(1),
                'updated_at' => $time
            ]);
        }
    }
}
