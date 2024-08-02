<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'user_id2',
        'last_message_id'

    ];

    public function user1(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function user2(){
        return $this->belongsTo(User::class,'user_id2');
    }
}
