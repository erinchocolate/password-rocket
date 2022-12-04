<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    //Show password generator
    public function create(){
         return view('records.create');
    }

    // Save password
    public function store(Request $request){
        
        $formFields = $request->validate([
            'password'=>'required',
        ]);
        // Create an entry in database
        Record::create($formFields);
        return redirect("/");
    }

    //Show dashboard view
    public function dashboard(){
         return view('records.dashboard',[
        'records' => Record::all()
    ]);
    }

    //Show single password record
    public function show(Record$record){
        return view('records.show',[
        'record' => $record
    ]);
    }
    // Show password edit form
    public function edit(Record $record){
        return view('records.edit',['record'=>$record]);
    }

     // Update password
    public function update(Request $request, Record $record){
        $formFields = $request->validate([
            'password'=>'required',
            'description'=>'required'
        ]);
        $record->update($formFields);
        return redirect("/dashboard");
    }

    // Delete password
    public function delete(Record $record){
        $record->delete();
        return redirect("/dashboard");
    }
}
