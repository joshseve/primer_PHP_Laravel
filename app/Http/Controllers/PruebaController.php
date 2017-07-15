<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    function welcome(){
      $students=Student::all();
      // foreach ($students as $student) {
      //   echo $student->age;
      //   # code...
      // }
      return view('welcome')->with('students', $students);
    }

    function test(){
      return 'Ahora soy una prueba dentro de la funcion test';
    }
}
