<?php

namespace Database\Seeders;

use App\Models\SubCommunity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubCommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $i = new SubCommunity;
        $i->name="Social, Spirituality, Outdoors, Beauty, Entertainment, Relationships, Adventure, Finance, Fashion, Comedy";
        $i->people_with_common_interests=132;
        $i->save();
        
        SubCommunity::factory()->count(4)->create();
    }
}
