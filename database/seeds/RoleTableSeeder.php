<?php namespace database\seeds;

use Illuminate\Database\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as DB;

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
