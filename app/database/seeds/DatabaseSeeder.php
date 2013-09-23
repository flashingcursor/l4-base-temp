<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
        // Seed the Sentry Table
        $this->call('SentrySeeder');
        $this->command->info('Sentry tables seeded!');
		// $this->call('UserTableSeeder');
	}

}