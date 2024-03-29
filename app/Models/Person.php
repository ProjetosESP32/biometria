<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    // protected $table = 'people';

    protected $fillable = [
        'name',
        'enrollment',
        'rfid',
    ];

    public function biometries()
    {
        return $this->hasMany(Biometry::class, 'person_id');
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'people_rooms', 'person_id', 'room_id');
    }
}
