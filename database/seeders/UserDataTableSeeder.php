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

        $user2 = new UserData;
        $user2->name="Clara";
        $user2->password="contraseña22";
        $user2->gender="F";
        $user2->save();

        $user3 = new UserData;
        $user3->name="Carmen";
        $user3->password="contraseña23";
        $user3->gender="F";
        $user3->save();

        $user4 = new UserData;
        $user4->name="Paula";
        $user4->password="contraseña24";
        $user4->gender="F";
        $user4->save();

        $user5 = new UserData;
        $user5->name="Marcelino";
        $user5->password="contraseña25";
        $user5->gender="M";
        $user5->save();
    }
}
