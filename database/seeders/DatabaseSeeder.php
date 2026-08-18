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
                'user_id' => 1,
                'first_name' => 'Alice',
                'last_name' => 'Smith',
                'email' => 'alice@example.com',
                'phone' => '0412 345 678',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'first_name' => 'Bob',
                'last_name' => 'Jones',
                'email' => 'bob@example.com',
                'phone' => '0423 456 789',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'first_name' => 'Carol',
                'last_name' => 'Anderson',
                'email' => 'carol@example.com',
                'phone' => '0434 567 890',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'user_id' => 2,
                'first_name' => 'David',
                'last_name' => 'Lee',
                'email' => 'david@example.com',
                'phone' => '0445 678 901',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'user_id' => 2,
                'first_name' => 'Emma',
                'last_name' => 'Taylor',
                'email' => 'emma@example.com',
                'phone' => '0456 789 012',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'user_id' => 2,
                'first_name' => 'Frank',
                'last_name' => 'Brown',
                'email' => 'frank@example.com',
                'phone' => '0467 890 123',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'user_id' => 3,
                'first_name' => 'Grace',
                'last_name' => 'Williams',
                'email' => 'grace@example.com',
                'phone' => '0478 901 234',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'user_id' => 3,
                'first_name' => 'Henry',
                'last_name' => 'Davis',
                'email' => 'henry@example.com',
                'phone' => '0489 012 345',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
