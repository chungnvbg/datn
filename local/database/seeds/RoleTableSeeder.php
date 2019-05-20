<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        	[
        	'name'=>'Bac Si',
        	],

        	[
        	 'name'=>'Admin',
        	],

        	[
        	 'name'=>'Dieu duong',
        	],
        ];
        DB::table('role')->insert($data);
    }
}
