<?php

namespace Database\Seeders;

use App\Models\User_group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_group = new User_group();
        $user_group->id = 1;
        $user_group->name = 'nhóm 1';
        $user_group->save();
    }
}
