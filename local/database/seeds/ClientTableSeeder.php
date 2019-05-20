<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
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
        	'cli_name'    =>'levanthach',
        	'cli_age'     =>20,
        	'cli_phone'   =>'0123456789',
            'cli_email'   =>'levanthach2103@gmail.com',
        	'cli_password'=>bcrypt('123456'),
        	'cli_address' =>'Ha Noi', 
        	'cli_sex'     => 1,
        	'cli_level'   => 0,
        	'cli_status'  => 0,
        	'cate_id'     => 1,
        	'user_id'     => 1,
        	],
        ];
         DB::table('client')->insert($data);
    }
}
