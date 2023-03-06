<?php

namespace Database\Seeders;

use App\Models\ChatUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $t = new ChatUsers;
        $t->name="Alberta";
        $t->language="en";
        $t->save();

        $t->UserData()->attach(1);
        $t->UserData()->attach(4);
    }
}
