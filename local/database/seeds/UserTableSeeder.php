<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user')->insert([
            'name' => 'Nguyễn Phúc Phú',
            'age' => 22,
            'phone' => 115,
            'email' => 'phucphu@gmail.com',
            'password' => bcrypt('123456'),
            'address' => 'mai trung hiệp hòa bắc giang',
            'sex' => 'nam',
            'avatar' => '2.jpg',
            'level' => 2,
            'cate_id' => 2,
        ]);
    }
}
