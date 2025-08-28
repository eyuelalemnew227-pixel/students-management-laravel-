<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        return 'hellow from controller';   
    }
    public function aboutus($id, $name)
    {
        return 'ID NO'.$id.'Name'. $name;
    }
}