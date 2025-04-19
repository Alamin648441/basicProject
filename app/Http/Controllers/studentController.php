<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class studentController extends Controller
{
    //
    public function index()
    {
        return view("studentHome");
    }
    public function createStudent(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|max:20|min:6",
            "session" => "required|max:9|min:4",
            "semester" => "required|max:4|min:1",
            "shift" => "required|max:4|min:1",
            "roll" => "required|max:6|min:6",
            "group" => "required|max:1",
            "image" => "required|image|mimes:png,jpg,gif,svg|max:2080",
        ]);

        $imageFile = $request->file("image");

        $imageName = time() . "." . $imageFile->extension();
        $validated['image']->move(public_path('images'), $imageName);
        $student = new StudentInformation();
        $student->name = $validated["name"];
        $student->session = $validated["session"];
        $student->group = $validated["group"];
        $student->semester = $validated["semester"];
        $student->roll = $validated["roll"];
        $student->shift = $validated["shift"];
        $student->image = $imageName;
        $student->save();

        return redirect('studentView')->with('success', 'Student add successfully ');
    }

    public function stView()
    {
        $studentData = StudentInformation::all();
        return view('studentListView', compact('studentData'));
    }


    public function editStudent($id)
    {
        $editStudent = StudentInformation::find($id);

        if (!$editStudent) {
            return redirect()->back()->with('error', 'Student Id not found');
        }

        return view('editStudent', compact('editStudent'));
    }
    public function updatefunction (Request $request ,$id){
        $validated = $request->validate([
            "name" => "required|max:20|min:6",
            "session" => "required|max:9|min:4",
            "semester" => "required|max:4|min:1",
            "shift" => "required|max:4|min:1",
            "roll" => "required|max:6|min:6",
            "group" => "required|max:1",
            "image" => "required|image|mimes:png,jpg,gif,svg|max:2080",
        ]);
        $studentData = StudentInformation::find($id);
        $studentData->name = $validated["name"];
        $studentData->session= $validated["session"];
        $studentData->semester = $validated["semester"];
        $studentData->shift = $validated["shift"];
        $studentData->roll= $validated["roll"];
        $studentData->group = $validated["group"];
        $studentData->image = $validated["image"];
        $studentData->save();
        return redirect('/studentView')->with("success","successfully updated ");

    }
    public function destroyStudent($id){

        $student = StudentInformation::find($id);
        if (!$student) {
            return redirect()->back()->with("error", "Student not Found");
        }
        $student->delete();
        return redirect()->back()->with("success", "student deleted");
    }
}
