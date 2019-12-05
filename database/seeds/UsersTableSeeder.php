<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'usertype' =>'Admin',
        ],
        [

            'username' => 'lecture01',
            'name' => 'Lecture01',
            'email' => 'lecture01@gmail.com',
            'password' => bcrypt('lecture01'),
            'usertype' =>'Lecturer',

        ],
        [
            'username' => 'student01',
            'name' => 'Student01',
            'email' => 'student01@gmail.com',
            'password' => bcrypt('student01'),
            'usertype' =>'Student', 
        ]
    );
    }
}
