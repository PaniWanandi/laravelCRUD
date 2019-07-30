<?php

namespace App\Http\Controllers;
use App\dataMahasiswa;

use Illuminate\Http\Request;

class datamahasiswacontroller extends Controller
{
 
     public function data(){
         $datamahasiswa = dataMahasiswa::all();
         return view('data', compact('datamahasiswa'));
     }
     public function add(){
        $add = dataMahasiswa::all();
        return view('form', compact('add'));
    }
     public function hasil(Request $request){
         
 
 $input= new dataMahasiswa();

 $input->nim=$request->nim;
 $input->nama=$request->nama;

 if($input->save()){
     return redirect()->to('data');
 }else {
     return view('form');
 }
}
}
