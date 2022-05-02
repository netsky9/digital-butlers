<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$roles = [
			[
				'title'      => 'Admin'
			],
			[
				'title'      => 'User'
			],
		];
		\DB::table('roles')->insert($roles);
    }
}
