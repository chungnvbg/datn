<?php

use Illuminate\Database\Seeder;

class CatedrugTableSeeder extends Seeder
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
        		'catedru_name'=>'thuoc vac xin',
        		'catedru_status'=>1,
        		'catedru_parent'=>0,
        	],

        	[
        		'catedru_name'=>'thuoc than kinh',
        		'catedru_status'=>1,
        		'catedru_parent'=>0,
        	],

        	[
        		'catedru_name'=>'thuoc tieu hoa',
        		'catedru_status'=>0,
        		'catedru_parent'=>0,
        	],

        	[
        		'catedru_name'=>'thuoc khang sinh',
        		'catedru_status'=>1,
        		'catedru_parent'=>0,
        	],
        ];
        DB::table('category_drug')->insert($data);
    }
}
