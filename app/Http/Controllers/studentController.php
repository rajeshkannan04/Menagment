<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = StudentInfo::get();
        return view("showStudents",compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $info = new StudentInfo();
        $info->Name = $request->name;
        $info->Email = $request->email;
        $info->Age = $request->age;
        $info->Phone = $request->phone;
        $info->Rollnum = $request->rollnum;
        $info->class = $request->class;
        $info->save();
        return redirect("/viewstu");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = StudentInfo::find($id);
        return view('editStudents',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = StudentInfo::find($id);
        $data->Name = $request->name;
        $data->Email = $request->email;
        $data->Age = $request->age;
        $data->Phone = $request->phone;
        $data->save();
        return redirect("/viewstu");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delStu = StudentInfo::find($id);
        $delStu->delete();
        return redirect("/viewstu");
    }
}
