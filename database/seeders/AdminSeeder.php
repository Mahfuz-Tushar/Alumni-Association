<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $admin=[
            
        //         'name'=>'mahafuz',
        //         'email'=>'mahafuz@gmail.com',
        //         'is_admin'=>'1',
        //         'password'=>bcrypt('123456'),
        //         'department'=>'cse',
        //         'session'=>'2018-19',
        //         'address'=>'jamalpur',
        //         'passing_year'=>'2024',
        //         'gender'=>'male',
        //         // 'email_verified_at'=>'',
        //         'current_job'=>'student',
        //     ]
        // ];
        DB::table('admins')->insert([
                'name'=>'mahafuz',
                'email'=>'mahafuz@gmail.com',
                'is_admin'=>'1',
                'password'=>bcrypt('123456')
        ]);
        
          
        
    }
}
