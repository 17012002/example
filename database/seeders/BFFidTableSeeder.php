<?php

namespace Database\Seeders;

use App\Models\BFFid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BFFidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $e = new BFFid;
        $e->user_id = 1;
        $e->bff_bracelet_id='00000000000';
        $e->name="Loren_amigo";
        $e->password="contraseña21Amistad";
        $e->date_of_the_creation_of_the_account="eldiasiguiente";
        $e->gender="una_moza_de_mi_pueblo";
        $e->save();

        BFFid::factory()->count(19)->create();
    }
}
