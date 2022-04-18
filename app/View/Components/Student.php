<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Student extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

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
        return view('components.student',["list" => $list]);
    }
}
