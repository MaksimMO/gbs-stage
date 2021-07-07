<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
    	if (!User::where('email', 'admin@admin.com')->exists()) {
			$users = [
				[
					'id' => 1,
					'name' => 'gbs_manager',
					'email' => 'admin@admin.com',
					'password' => '$2y$10$54k.VdRU/WZ9lkcRlkgXUO75PIesVIejlbt8Kp7kBLnfYbMNGnk6O',
					'remember_token' => null,
					'class_id' => null,
				]
			];

			User::insert($users);
		}
    }
}
