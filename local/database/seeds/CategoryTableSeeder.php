<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
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
        	'cate_name'=>'khoa noi',
        	'cate_status'=> 1,
            'cate_parent'=> 0,
            ],

            [
            'cate_name'=>'khoa ngoai',
            'cate_status'=> 1,
            'cate_parent'=> 0,
            ],

            [
            'cate_name'=>'khoa tai mui hong',
            'cate_status'=> 1,
            'cate_parent'=> 0,
            ],

            [
            'cate_name'=>'nha khoa',
            'cate_status'=> 1,
            'cate_parent'=> 0,
            ],
        ];
        DB::table('categorys')->insert($data);
    }
}
