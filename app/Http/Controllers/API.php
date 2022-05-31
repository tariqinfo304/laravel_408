<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;

class API extends Controller
{
    function user_list()
    {
        //return UserResource::collection(User::all());
        return new UserResource(User::paginate());
    }


    function list()
    {
        $list = User::all();
        //$list = User::paginate();
        return response()->json($list);
    }

    function user_save(Request $req)
    {
        $name = $req->name;


        $err = [];

        if(empty($name))
        {
            $err["name"] = "Name is required!";
        }



        if(count($err) >= 1 )
        {   
            return response()->json([
                "status" => 400,
                "err" => $err
            ]);
        }

        ////

        //
        ///
        //$u = new User();
        // $u->name = $name;

        //$u->save();


        

        return response()->json([
            "status" => 200,
            "msg" => "user saved successfully"
        ]);
    }
}
