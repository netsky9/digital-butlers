<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = [
			[
				'name' => 'admin',
				'email' => 'admin@gmail.com',
				'email_verified_at' => Carbon::now(),
				'password' => bcrypt('admin'),
				'role_id' => 1 // admin
			],
			[
				'name'      => 'user',
				'email'     => 'user@gmail.com',
				'email_verified_at' => Carbon::now(),
				'password'  => bcrypt('user'),
				'role_id'      => 2 // user
			],

		];
		\DB::table('users')->insert($users);
    }
}
