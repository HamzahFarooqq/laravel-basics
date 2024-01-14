<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //Show all Students
    public function show () {
        
        // Query Builder
        $students = DB::table('students')->pluck('student_name');

        // $students = Student::all();
        return view('index', ['students' => $students]);
    
    }

    //show single student
    // public function single(Request $request, student $student)
    // {
    //     $student = Student::where('age', $student->age)->firstorfail();

    //     return view('single', ['student' => $student]);
    // }

    // create form 
    public function create () {
        return view('create');
    }

    // store data
    public function store (request $request) {

        // echo $request->name;

        // echo $request->name;

        $request->validate([
            'student_name' => 'required',
            'age'   =>  'required|min:5|max:50',
            
        ]);
        
        
        $student = new Student;
        $student->student_name = $request->name;
        $student->age = $request->age;
        $student->save();

       

        return redirect()->route('students.index', ['student' => $student]);
    }

    // show update student
    public function edit (string $id) {
        $student = Student::find($id);

        return view('edit', ['student' => $student]);

    }

    // updated student
    public function update (request $request, string $id) {

        $student = Student::find($id);

        
        $student->student_name = $request->name;
        $student->age = $request->age;
        $student->save();
        
        return redirect('/index');
    }

    public function destroy (string $id) {
        // $student = Student::find($id);
        // $student->destroy($id);

       Student::destroy($id);

        return redirect('/index');
    }
}
