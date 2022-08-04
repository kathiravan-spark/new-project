<?php

namespace Database\Seeders;
use App\Models\BankName;

use Illuminate\Database\Seeder;

class BankNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankName::insert([
            [                
                'id' =>'1' ,
                'bank_name' => 'HDFC Bank',
                'bank_short_name'=>'HDFC',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' =>'2' ,
                'bank_name' => 'Canara Bank',
                'bank_short_name'=>'CB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '3',
                'bank_name' => 'Indian Bank',
                'bank_short_name'=>'IB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '4',
                'bank_name' => 'Indian Overseas Bank',
                'bank_short_name'=>'IOB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '5',
                'bank_name' => 'State Bank of India',
                'bank_short_name'=>'SBI',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '6',
                'bank_name' => 'Axis Bank',
                'bank_short_name'=>'AB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '7',
                'bank_name' => 'City Union Bank',
                'bank_short_name'=>'CUB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '8',
                'bank_name' => 'Karur Vysya Bank',
                'bank_short_name'=>'KVB',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [ 
                'id' => '9',
                'bank_name' => 'ICICI Bank',
                'bank_short_name'=>'ICICI',
                'status' => 1,
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}
