<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("student.std_list",["list" => Student::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $std = new Student();
        $std->name = $request->name;
        $std->age = $request->age;
        $std->cnic = $request->cnic;
        $std->height = $request->height;
        $std->roll_no = $request->roll_no;

        $std->save();

        return redirect("/student");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $std = Student::find($id);
        return view("student.delete_preview",["obj" => $std]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $std = Student::find($id);
        return view("student.create",["obj" => $std]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());

        $std = Student::find($id);

        $std->name = $request->name ?? $std->name; 
        $std->cnic = $request->cnic ?? $std->cnic; 
        $std->age = $request->age ?? $std->age; 
        $std->height = $request->height ?? $std->height; 
        $std->roll_no = $request->roll_no ?? $std->roll_no; 
        $std->save();

         return redirect("/student");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $std = Student::find($id);
        $std->delete();
        return redirect("/student");
    }
}
