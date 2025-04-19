<?php

namespace App\Http\Controllers;

use App\Models\Notepad;
use Illuminate\Http\Request;

class notepadController extends Controller
{
    //
    public function index()
    {
        return view("notePadHome");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:50",
            "description" => "required|max:250",
        ]);
        $notepad = new Notepad();
        $notepad->title = $validated["title"];
        $notepad->description = $validated["description"];
        $notepad->save();
        return redirect('noteView')->with("success", "Note added successfully");
    }
    public function show()
    {
        $notepad = Notepad::all();
        return view("noteView", compact("notepad"));
    }

    public function editData($id)
    {
        $data = notepad::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Note not found');
        }

        return view('editdata', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:250',
        ]);
        $data = notepad::find($id);
        $data->title = $validated['title'];
        $data->description = $validated['description'];
        $data->save();
        return redirect('/noteView')->with('success', 'Successfully Updated');
    }

    public function destroyNote($id)
    {
        $notepad = Notepad::find($id);
        $notepad->delete();
        return redirect()->back()->with("success", "successfully deleted");
    }
}
