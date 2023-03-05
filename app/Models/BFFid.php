<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BFFid extends Model
{
    use HasFactory;

    public function userdata()
{
    return $this->belongsTo(UserData::class, 'user_id', 'id');
}
}
