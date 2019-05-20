<?php

use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
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
                'ser_name'=>'Khuyen mai thang 3',
                'ser_price'=>'5000000',
                'ser_content'=>'dich vu kham rang',
                'ser_voucher'=>'Giam 50%',
                'ser_datetime'=>'1/03/2019', 
                'ser_status'=>0,
                'cate_id'=>1,
            ],

            [
                'ser_name'=>'Khuyen mai thang 5',
                'ser_price'=>500000,
                'ser_content'=>'dich vu kham suc khoe',
                'ser_voucher'=>'Giảm 30%',
                'ser_datetime'=>'1/05/2019', 
                'ser_status'=>1,
                'cate_id'=>1,
            ],

            [
                'ser_name'=>'Khuyen mai thang 4',
                'ser_price'=>5000000,
                'ser_content'=>'dich vu kham ',
                'ser_voucher'=>'Giảm 20%',
                'ser_datetime'=>'10/04/2019', 
                'ser_status'=>1,
                'cate_id'=>1,
            ],

            [
                'ser_name'=>'Khuyen mai thang 5',
                'ser_price'=>200000,
                'ser_content'=>'dich vu kham noi soi',
                'ser_voucher'=>'Giảm 30%',
                'ser_datetime'=>'3/05/2019', 
                'ser_status'=>1,
                'cate_id'=>1,
            ],

        ];
        DB::table('service')->insert($data);
    }
}
