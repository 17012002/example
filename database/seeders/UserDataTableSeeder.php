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
        $a = new UserData;
        $a->name="Loren";
        $a->password="contraseña21";
        $a->date_of_the_creation_of_the_account="3/4/1492";
        $a->gender="male";
        $a->subscriptions="1";
        $a->save();

        UserData::factory()->count(15)->create();
    }
}