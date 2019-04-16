<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function Index(){
        // $patients=Patient::get();
        return view('tool.index') ;
    }
    
}
