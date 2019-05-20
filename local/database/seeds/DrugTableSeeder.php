<?php

use Illuminate\Database\Seeder;

class DrugTableSeeder extends Seeder
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
        	'drug_name'=>'tananka',
        	'drug_image'=>'13.jpg',
        	'drug_from'=>'canada',
        	'drug_distrebution'=>'nha thuoc ngo chung',
        	'drug_warranty'=>'1/12/2022', 
        	'drug_status'=>1,
        	'catedrug_id'=>1,
        	],

        	[
        	'drug_name'=>'arcalion',
        	'drug_image'=>'14.jpg',
        	'drug_from'=>'canada',
        	'drug_distrebution'=>'nha thuoc ngo chung',
        	'drug_warranty'=>'1/12/2022', 
        	'drug_status'=>1,
        	'catedrug_id'=>1,
        	],     

        	[
        	'drug_name'=>'rocket',
        	'drug_image'=>'15.jpg',
        	'drug_from'=>'canada',
        	'drug_distrebution'=>'nha thuoc ngo chung',
        	'drug_warranty'=>'1/12/2022', 
        	'drug_status'=>0,
        	'catedrug_id'=>2,
        	],     

        	[
        	'drug_name'=>'lion',
        	'drug_image'=>'16.jpg',
        	'drug_from'=>'canada',
        	'drug_distrebution'=>'nha thuoc ngo chung',
        	'drug_warranty'=>'1/12/2023', 
        	'drug_status'=>1,
        	'catedrug_id'=>3,
        	],            
        ];
        DB::table('drug')->insert($data);
    }
}
