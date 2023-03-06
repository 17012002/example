<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    use HasFactory;

    public function bffid()
    {
        return $this->hasOne(BFFid::class, 'user_id', 'id');
    }

    public function subcommunity()
    {
        return $this->belongsTo(SubCommunity::class, 'subscriptions', 'id');
    }

    public function chatting()
    {
        return $this->belongsToMany(ChatUsers::class, 'chatter_id', 'user_id');
    }
}
