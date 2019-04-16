<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Patient;

class PatientController extends Controller
{
    public function Index(){
        $patients=Patient::get();
        return view('patient.index')->withPatients($patients) ;
    }

    public function Create(){
        return view('patient.create') ;
    }

    public function CreateSave(Request $request){
        // return $request->name;
        $new = new Patient;
        $new->fname = $request->name;
        $new->lname = $request->lastname;
        $new->save();
        return redirect('patient') ;
    }
}
