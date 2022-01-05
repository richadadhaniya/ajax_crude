<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Practice;

class PracticeController extends Controller
{
    public function insert()
    {
        $forms=Practice::get();
        return view('practice',compact('forms'));
    }
    public function store(Request $request)
    {
        $forms=new Practice();
        $forms->city=$request->input('city');
        $forms->vehicle=$request->input('vehicle');
        $forms->date=$request->input('date');
        $forms->booking_type=$request->input('booking_type');
        $forms->half_day=$request->input('half_day');
        $forms->hourly=$request->input('hourly');
        $forms->destination=$request->input('destination');

        $forms->save();
        return redirect()->route('vieewss');
    }
    public function viiew()
    {
        $forms=Practice::get();
        return view('viewpage',compact('forms'));
    }
}
