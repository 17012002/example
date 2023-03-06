<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatUsers extends Model
{
    use HasFactory;

    public function chattinng()
    {
        return $this->belongsToMany(UserData::class, 'chatter_id', 'user_id');
    }
}
