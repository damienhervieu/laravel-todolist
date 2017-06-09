<?php

/**
* 
*/
class TasksTableSeeder extends Seeder{
	
	public function run() {
		DB::table('tasks')->delete();

		$tasks = array(
			array(
				'owner_id' => '2',
				'name' => 'Aller chercher mémé'
			),

			array(
				'owner_id' => '2',
				'name' => 'Acheter du lait'
			),

			array(
				'owner_id' => '2',
				'name' => 'Faire manger de la viande à la copine d\'Arthur Daniel qui est végan (#viveLeSaucisson)'
			)
		);

		DB::table('tasks')->insert($tasks);
	}
}