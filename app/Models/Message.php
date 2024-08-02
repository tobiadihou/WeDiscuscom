<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'message',
        'sender_id',
        'receiver_id',
        'goupe_id',
        'conversation_id',
    ];

    public function sender(){
        return $this->belongsTo(User::class,'sender_id');
    }
    public function recever(){

        return $this->belongsTo(User::class,'receiver_id');
    }
    public function groupe(){

        return $this->belongsTo(Groupe::class,);
    }
    public function attachement(){

        return $this->hasMany(MessageAttachement::class,);
    }
}
