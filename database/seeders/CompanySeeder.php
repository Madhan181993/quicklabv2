<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            ['id'=>1, 'companyname'=>'Kavilash Technologies','companyaddress1'=>'Plot NO 26, Govindaraja nagar','companyaddress2'=>'Plot NO 26, Govindaraja nagar','companycity'=>'Chennai','companystate'=>'Tamilnadu','companypincode'=>'600056','companyphone'=>'222','companymobile1'=>'333','companymobile2'=>'55555','companyemail1'=>'test@gmail.com','companyemail2'=>'test1@gmail.com','companywebsite'=>'www.quicklab.com','companygstin'=>null,'companyiecno'=>1,'created_at'=>'2022-09-16 16:12:41','updated_at'=>'2022-09-16 16:12:41'],
        ];

        DB::table('companydetails')->insert($records);
    }
}
