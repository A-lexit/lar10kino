<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Admin',
            'email' => 'mega_sitemaker@ukr.net',
            'password' => '$2y$12$oHqJpi5Alou7UbSmcbYkRe0jnx4X7uVs7NQ05WdHCTF3ybCaZp9/W', //123456789
            'is_admin' => 1,
            'statuss' => 0,
            'created_at' => '2010-10-24 02:44:29',
            'updated_at' => '2010-10-24 02:44:29',
        ];

        DB::table('users')->insert($data);
    }
}
