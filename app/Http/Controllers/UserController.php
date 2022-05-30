<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    function index()
    {

        //hashing//
        /*
        $key = "tariq";

        $hash = Hash::make("$key");
        
        if(Hash::check($key,$hash))
        {
            echo "matched";
        }*/


        //Encryption / DEcryption
        /*
        $key = "tariq";

        $ecp = Crypt::encryptString($key);
      //  echo $ecp;
        echo Crypt::decryptString($ecp);

        */



        return view("web.login");
    }

    function login(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required"
        ]);


        $username = $req->username;
        $pass = $req->password;


        $user = User::where("email",$username)->first();
        if(!empty($user))
        {
            if(Hash::check($pass,$user->password))
            {
                session([

                    "username" => $user->email,
                    "name" => $user->name
                ]);
                //dd($user);
                return redirect("web");
            }
        }

        return redirect("login");
    }

    function user_form()
    {
        return view("web.register");
    }

    function add_user(Request $req)
    {
        $req->validate([
            "username" => "required",
            "password" => "required",
            "name" => "required"
        ]);



        $u = new User();

        $u->name = $req->name;
        $u->email = $req->username;
        $u->password =  Hash::make($req->password);
        $u->save();
        return redirect("login");
    }


    function logout(Request $req)
    {
        $req->session()->forget(['name', 'username']);
        return redirect("login");
    }
}
