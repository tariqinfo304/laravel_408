<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function index()
    {
        $name1 = "Student List Table";
        $title="Hello";

        $list = [

            [
                "id" => 1,
                "name" => "Ali",
            ],
            [
                "id" => 2,
                "name" => "Rafeeq",
            ],
            [
                "id" => 3,
                "name" => "Shabaz Shareef",
            ],
            [
                "id" => 4,
                "name" => "Mryam",
            ],
            [
                "id" => 5,
                "name" => "wot ko Ezat du",
            ],
            [
                "id" => 6,
                "name" => "Imran with Bajwa (R.A)",
            ]

        ];

        return view("hello",
            [
                "name"  => $name1,
                "title" => $title,
                "std_list" => $list
            ]);
    }
}
