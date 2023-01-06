<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomHistory extends Model
{
    use HasFactory;

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'people_rooms', 'person_id', 'room_id');
    }

    public function insert()
    {
        RoomHistory::create(array(
            'room_id' => $this->person(),
            'person_id' => $this->rooms(),
            'created_at' => NOW(),
            'updated_at' => NOW()
        ));
    }
}
