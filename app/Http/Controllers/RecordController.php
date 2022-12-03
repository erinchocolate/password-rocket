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
}