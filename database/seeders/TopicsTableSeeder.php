<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder {
	use WithoutModelEvents;
	public function run() {
		Topic::factory()->count(100)->create();
	}
}
