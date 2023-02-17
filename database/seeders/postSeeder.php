<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Posts;
use App\Models\User;

class postSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $post=Posts::create([
            'user_id'=>$user->id,


           ]);

    }
}
