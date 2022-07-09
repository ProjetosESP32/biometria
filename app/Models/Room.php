<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function histories()
    {
        return $this->hasMany(RoomHistory::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class, 'people_rooms', 'room_id', 'person_id');
    }
}
