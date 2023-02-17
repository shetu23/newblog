<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class createUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      $users=[
        [
            'name'=>'author',
            'email'=>'author@author.com',
            'password'=>'12345678',
            'role'=>0
        ],
        [
            'name'=>'admin',
            'email'=>'admin@author.com',
            'password'=>'12345678',
            'role'=>1
        ],
        [
            'name'=>'super_admin',
            'email'=>'super_admin@author.com',
            'password'=>'12345678',
            'role'=>2
        ]
      ];
      foreach($users as $user)
      {
        User::create($user);
      }
    }
}
