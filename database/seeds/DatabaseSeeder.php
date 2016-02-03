<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();
        $this->call('RoleTableSeeder');
        $this->command->info('Role Table Seeded');
		$this->call('UserTableSeeder');
		$this->command->info("User Table Seeded");
	}
}

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        DB::table('roles')->insert(
            array(
                'role_title' => 'Super Admin',
                'role_slug' => 'super_admin'
            ));
        DB::table('roles')->insert(
            array(
                'role_title' => 'Editor',
                'role_slug' => 'editor'
            ));
    }

}

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(
            array(
                'name' => 'Pawan Krishna Shrestha',
                'email' => 'pawanshr@gmail.com',
                'password' => bcrypt("pawanshr"),
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
        DB::table('users')->insert(
            array(
                'name' => 'Shrwan Krishna Shrestha',
                'email' => 'shrwan@gmail.com',
                'password' => bcrypt("pawanshr"),
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ));
    }

}

