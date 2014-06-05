<?php

use App\Models\User;

class SentrySeeder extends Seeder {

	public function run()
	{
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('groups')->truncate();
		DB::table('users_groups')->truncate();

		Sentry::getUserProvider()->create(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'John',
			'last_name'   => 'McClane',
			'activated'   => 1,
		));

		Sentry::getUserProvider()->create(array(
			'email'       => 'gtempesta@admin.com',
			'password'    => "gtempesta",
			'first_name'  => 'Giorgio',
			'last_name'   => 'Tempesta',
			'activated'   => 1,
		));

		Sentry::getUserProvider()->create(array(
			'email'       => 'svidotto@admin.com',
			'password'    => "svidotto",
			'first_name'  => 'Simone',
			'last_name'   => 'Vidotto',
			'activated'   => 1,
		));

		Sentry::getUserProvider()->create(array(
			'email'       => 'mdipieri@admin.com',
			'password'    => "mdipieri",
			'first_name'  => 'Matteo',
			'last_name'   => 'Di Pieri',
			'activated'   => 1,
		));

		Sentry::getGroupProvider()->create(array(
			'name'        => 'Admin',
			'permissions' => array('admin' => 1),
		));

		// Assign user permissions
		$adminUser  = Sentry::getUserProvider()->findByLogin('admin@admin.com');
		$adminUser2  = Sentry::getUserProvider()->findByLogin('gtempesta@admin.com');
		$adminUser3  = Sentry::getUserProvider()->findByLogin('svidotto@admin.com');
		$adminUser4  = Sentry::getUserProvider()->findByLogin('mdipieri@admin.com');
		$adminGroup = Sentry::getGroupProvider()->findByName('Admin');
		$adminUser->addGroup($adminGroup);
		$adminUser2->addGroup($adminGroup);
		$adminUser3->addGroup($adminGroup);
		$adminUser4->addGroup($adminGroup);
	}

}
