<?php

namespace App\Http\Controllers;

use Request;
use App\Model\Drug;
class DrugController extends Controller
{
    public function Index(){
        $drugs = Drug::get();
        
        return view('drug.index')->withDrugs($drugs);
    }
    public function Create(){
        return view('drug.create') ;
    }
    public function Edit($id){
        $drug = Drug::find($id);
        
        return view('drug.edit')->withDrug($drug) ;
    }
    public function CreateSave(Request $request){
        // return $request->name;
        $new = new Drug;
        $new->name = $request->drugname;
        $new->qty = $request->drugqty;
        $new->save();
        return redirect('drug') ;
    }

    public function EditSave($id){
        // return $request->name;
        $drug =  Drug::find($id)->update([
            'name' => Request::input('drugname'),
            'qty' => Request::input('drugqty')
        ]);
        return redirect('drug') ;
    }

    public function Delete($id){
        $drug =  Drug::find($id)->delete();
        return redirect('drug') ;
    }
}
