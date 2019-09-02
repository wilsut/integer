<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
    protected $table = 'points';
    protected $fillable = [
      'point',
      'note',
      'student_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
