<?php

class UsersTableSeeder extends Seeder {

	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'name' => 'Damien',
				'password' => Hash::make('damien'),
				'email' => 'damien.hervieu@ynov.com'
			)
		);

		DB::table('users')->insert($users);
	}
}