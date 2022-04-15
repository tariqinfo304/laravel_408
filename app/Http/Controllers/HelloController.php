<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function hello($id)
    {
        echo "It's a hello method call from HopmeController : $id";
    }
}
