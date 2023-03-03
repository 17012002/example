<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user_data;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new user_data;
        $user1->name="Loren";
        $user1->password="contraseña21";
        $user1->gender="M";
        $user1->save();
    }
}
