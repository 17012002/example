<?php

namespace Database\Seeders;

use App\Models\UserData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = new UserData;
        $user1->name="Loren";
        $user1->password="contraseña21";
        $user1->gender="M";
        $user1->save();
    }
}
