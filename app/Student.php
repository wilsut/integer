<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'nrp',
      'name',
      'gender'
    ];

    public function points()
    {
        return $this->hasMany(Points::class);
    }
}
