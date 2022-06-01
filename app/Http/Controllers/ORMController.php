<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Product;

use DB;

use App\Models\Post;
use App\Models\Friend;

class ORMController extends Controller
{
    
    function index()
    {   
        /*
        $std = new Student();
        //create
        $std->name = "Shafiq";
        $std->age = 22;
        $std->cnic = "35202-1122343-8";
        $std->height = 5.3;
        $std->roll_no= "PHP_5";

        $is_save = $std->save();
        if($is_save)
        {
            echo "Data saved suvccessfully";
        }
        else
        {
            echo "Not inserted due to error";
        }*/

        /*
        //Update
        $std = Student::find(1);
        $std->name= "Ramish";
        $is_update = $std->save();
        if($is_update)
        {
            echo "Data updated suvccessfully";
        }
        else
        {
            echo "Not updated due to error";
        }
        */
        /*
        //remove
        $std = Student::find(1);
        $is_removed = $std->delete();
        if($is_removed)
        {
            echo "Data deleted suvccessfully";
        }
        else
        {
            echo "Not deleted due to error";
        }
        */

        /*
        //Getting all record

        //$list = Student::all();

        //$list = Student::where("age","22")->get();

        $list = Student::where("name", "like","a%")->get();

        foreach($list as $row)
        {
            echo "$row->name  :: $row->cnic <br/>";
        }
        //dd($list);
        */






        //Query Builder

        /*
        $list = DB::table("student")->select('name',"cnic","id")->get(); 

        dd($list);
        // foreach($list as $row)
        // {
        //     echo "$row->name  :: $row->cnic <br/>";
        // }
        */

        /*
        //insert

        DB::table("student")->insert([
            "name" => "ramza",
            "cnic" => "2323",
            "age" => 23,
            "roll_no" => "23",
            "height" => 4.5
        ]);
        */

        /*
        //update

        DB::table("student")->where("id",6)
        ->update([
            "name" => "updated name"
        ]);
        */

        /*
        //remove


        DB::table("student")->where("id",6)->delete();
        */
    }


    function one_to_many()
    {
        $p  = Product::find("4");
        dd($p->images);
    }

    function one_to_one()
    {
        $p  = Product::find("4");
        dd($p->info);
    }

    function many_to_many()
    {

        /*
        $post = Post::find("1");
        dd($post->friend_list);
        */


        $friend= Friend::find(3);

        dd($friend->post_list);
    }
}
