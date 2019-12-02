<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'email', 'name', 'lecturer_name', 'student_name', 'remarks', 'status',
    ];
}
