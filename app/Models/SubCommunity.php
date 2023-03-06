<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCommunity extends Model
{
    use HasFactory;

    public function userDataCommunityFunc(){
        return $this->hasMany(UserData::class, subscriptions, id);
    }
}
