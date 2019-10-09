<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('search')) {
    		$teacher_data = \App\Teacher::where('name','LIKE','%'.$request->search.'%')->get();
    	}else{
    		$teacher_data = \App\Teacher::all();
    	}
    	return view('teacher.index',['teacher_data' => $teacher_data]);
    }

    public function create(Request $request)
    {
    	\App\Teacher::create($request->all());
    	return redirect('/teacher')->with('success','Insert Data Success!!');
    }

    public function edit($id)
    {
    	$teacher = \App\Teacher::find($id);
    	return view('teacher/edit',['teacher' => $teacher]);
    }

    public function update(Request $request, $id)
    {
    	$teacher = \App\Teacher::find($id);
    	$teacher->update($request->all());
    	return redirect('/teacher')->with('success','Update Data Success!!');
    }

    public function delete($id)
    {
    	$teacher = \App\Teacher::find($id);
    	$teacher->delete($teacher);
    	return redirect('/teacher')->with('success','Delete Data Success!!');
    }
}
