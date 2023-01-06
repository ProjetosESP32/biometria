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

    public function insert($fingerprint)
    {
        Biometry::create(array(
            'person_id' => $this->person(),
            'fingerprint' => $fingerprint,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ));
    }

    public function deletePerson($person_id)
    {
        Biometry::where('person_id', '=', $person_id)->delete();
    }

    public function updateFingerprint($fingerprint, $newFingerprint)
    {
        Biometry::where('fingerprint', '=', $fingerprint)->update(array('fingerprint' => $newFingerprint));
    }



}