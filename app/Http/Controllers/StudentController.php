<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
      Student::create([
                'name'=>'Ahmad',
                'class'=>'Matric'
                      ]);
        return 'student controller';
    }
}
