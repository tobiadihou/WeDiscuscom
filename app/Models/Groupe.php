<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "description",
        "owner_id",
        "last_message_id",
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'groupe_user');
    }
    public function messsages()
    {
        return $this->hasMany(Message::class);
    }
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
