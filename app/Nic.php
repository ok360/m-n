<?php

namespace App;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Nic extends Model
{
    public function student()
    {
       return $this->belongsTo (Student::class);
    }
}
