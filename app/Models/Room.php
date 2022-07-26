<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mac_address',
    ];

    protected static function booted()
    {
        $macAddressCleanup = function (Room $room) {
            $room->mac_address = preg_replace('/[^0-9A-Fa-f]/', '', $room->mac_address);
        };

        static::creating($macAddressCleanup);
        static::updating($macAddressCleanup);
    }

    public function histories()
    {
        return $this->hasMany(RoomHistory::class);
    }

    public function people()
    {
        return $this->belongsToMany(Person::class, 'people_rooms', 'room_id', 'person_id');
    }
}
