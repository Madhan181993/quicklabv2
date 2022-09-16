<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $records = [
            ['id'=>1, 'usercode'=>'admin','userfirstname'=>'Quicklab','usermiddlename'=>'aa','userlastname'=>'Administrator','email'=>'demo@quicklab.in','password'=>Hash::make('Demo1234'),'userphone'=>'222','usermobile1'=>'333','usermobile2'=>'55555','useremail1'=>'demo!@gmail.com','useraddress1'=>'2,gandhi street','useraddress2'=>'null','usercity'=>'chennai','userstate'=>'Tamilnadu','usercountry'=>'India','userpincode'=>'34245','userrole'=>1,'userstatus'=>1,'deleted_status'=>0,'created_at'=>'2022-09-16 03:03:00','updated_at'=>'2022-09-16 03:03:00'],
            ['id'=>2, 'usercode'=>'Kavilash','userfirstname'=>'Kavilash','usermiddlename'=>'aa','userlastname'=>'Administrator','email'=>'kavilashtech@gmail.com','password'=>Hash::make('Demo1234'),'userphone'=>'222','usermobile1'=>'333','usermobile2'=>'55555','useremail1'=>'demo@gmail.com','useraddress1'=>'2,gandhi street','useraddress2'=>'null','usercity'=>'chennai','userstate'=>'Tamilnadu','usercountry'=>'India','userpincode'=>'34245','userrole'=>1,'userstatus'=>1,'deleted_status'=>0,'created_at'=>'2022-09-16 03:03:00','updated_at'=>'2022-09-16 03:03:00'],
        ];

        DB::table('users')->insert($records);
        
    }
}
