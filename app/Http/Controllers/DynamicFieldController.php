<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;

class DynamicFieldController extends Controller
{
   public function addMore()
    {
        return view("dynamic_field");
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.first_name' => 'required',
            'addmore.*.last_name' => 'required',
            'addmore.*.address' => 'required',
        ]);
    
        foreach ($request->addmore as $key => $value) {
            DynamicField::create($value);
        }
    
        return back()->with('success', 'Record added Successfully.');
    }
}
