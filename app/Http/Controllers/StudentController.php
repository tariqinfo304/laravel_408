<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index($name=NULL)
    {
        echo "StudentController : $name";
    }
}
