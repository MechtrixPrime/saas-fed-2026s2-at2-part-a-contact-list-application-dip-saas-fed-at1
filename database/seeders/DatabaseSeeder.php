<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Users
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'John Carter',
                'email' => 'john@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Sarah Wilson',
                'email' => 'sarah@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Michael Brown',
                'email' => 'michael@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Contacts
        |--------------------------------------------------------------------------
        */

        DB::table('contacts')->insert([
            [
                'id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
