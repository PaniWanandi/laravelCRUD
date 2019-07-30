<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactControler extends Controller
{
    function show(){
        return view('contact');
    }
    function add(){
        return view('form');
    }
    public function storeForm(Request $request)
    {
        return dd($request->all());
    }
}
