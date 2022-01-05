<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pre;

class PreController extends Controller
{
    public function index()
    {
        $form=Pre::get();
        return view('practice',compact('form'));
    }
    public function storee(Request $request)
    {
        $form = new Pre();
        $form->email= $request->input('email');
        $form->password= $request->input('password');

        $form->save();
        return redirect()->route('views');

    }
    
}
