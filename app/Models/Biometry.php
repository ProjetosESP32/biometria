<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biometry extends Model
{
    use HasFactory;

    protected $fillable = [
        'fingerprint',
    ];

    protected $hidden = [
        'fingerprint',
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'person_id');
    }
}
