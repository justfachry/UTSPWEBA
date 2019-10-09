<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->has('search')) {
    		$student_data = \App\Student::where('name','LIKE','%'.$request->search.'%')->get();
    	}else{
    		$student_data = \App\Student::all();
    	}
    	return view('student.index',['student_data' => $student_data]);
    }

    public function create(Request $request)
    {
    	\App\Student::create($request->all());
    	return redirect('/student')->with('success','Insert Data Success!!');
    }

    public function edit($id)
    {
    	$student = \App\Student::find($id);
    	return view('student/edit',['student' => $student]);
    }

    public function update(Request $request, $id)
    {
    	$student = \App\Student::find($id);
    	$student->update($request->all());
    	return redirect('/student')->with('success','Update Data Success!!');
    }

    public function delete($id)
    {
    	$student = \App\Student::find($id);
    	$student->delete($student);
    	return redirect('/student')->with('success','Delete Data Success!!');
	}
	
	public function profile($id)
    {
		$student = \App\Student::find($id);
		return view('student.profile', ['student' =>  $student]);

	}
}
