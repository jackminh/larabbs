<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	public function run() {
		// 生成数据集合

		User::factory()->count(10)->create();

		//单独处理第一个用户的数据
		$user = User::find(1);
		$user->name = 'Summer';
		$user->email = 'summer@example.com';
		$user->avatar = 'https://cdn.learnku.com/uploads/images/201710/14/1/ZqM7iaP4CR.png';
		$user->save();

		$user->assignRole('Founder');
		$user = User::find(2);
		$user->assignRole('Maintainer');
	}
}