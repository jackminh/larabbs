<?php

namespace Database\Seeders;

use Database\Seeders\LinksTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	public function run() {
		$this->call(UsersTableSeeder::class);
		$this->call(TopicsTableSeeder::class);
		$this->call(RepliesTableSeeder::class);
		$this->call(LinksTableSeeder::class);
	}
}