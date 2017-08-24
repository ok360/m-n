<?php

namespace App;

use App\Nic;
use App\Subject;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable=['name','class'];


   public function nic()
   {
       return $this->hasOne (Nic::class);
   }
   public function subjects()
   {
    return $this->hasMany (Subject::class);
   }
}
