<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teach;

class periodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = teach::get();
        return view("showTeachers",compact('teacher'));
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
        $data = new teach();
        $data->Name = $request->name;
        $data->Email = $request->email;
        $data->Age = $request->age;
        $data->Phone = $request->phone;
        $data->save();
        return redirect("/view");
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
        $user = teach::find($id);
        return view('editTeachers',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data1 = teach::find($id);
        $data1->Name = $request->name;
        $data1->Email = $request->email;
        $data1->Age = $request->age;
        $data1->Phone = $request->phone;
        $data1->save();
        return redirect("/view");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delTeach = teach::find($id);
        $delTeach -> delete();
        return redirect("/view");
    }
}
