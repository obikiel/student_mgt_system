<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends model
{
    protected $fillable = ['cne', 'firstname', 'surname', 'age','course_of_study'];
}
