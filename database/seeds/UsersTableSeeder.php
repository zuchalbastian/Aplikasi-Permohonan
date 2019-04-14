<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'user1',
            'role_id' => 2,
            'nip' => 1461600209,
            'email' => 'user567@gmail.com',
            'password' => bcrypt('user2345'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'role_id' => 2,
            'nip' => 1461600208,
            'email' => 'user678@gmail.com',
            'password' => bcrypt('user6789'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
             'nip' => 1461600243,
            'email' => 'admin34@gmail.com',
            'password' => bcrypt('admin123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'staff',
            'role_id' => 3,
             'nip' => 1461600256,
            'email' => 'staff56@gmail.com',
            'password' => bcrypt('staff2356'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'staff2',
            'role_id' => 3,
             'nip' => 1461600222,
            'email' => 'staff567@gmail.com',
            'password' => bcrypt('staff2357'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'spv',
            'role_id' => 4,
             'nip' => 1461600333,
            'email' => 'spv333@gmail.com',
            'password' => bcrypt('spv3456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
 
        DB::table('users')->insert([
            'name' => 'manager',
            'role_id' => 5,
             'nip' => 1461600345,
            'email' => 'manager456@gmail.com',
            'password' => bcrypt('manager78'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
