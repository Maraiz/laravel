<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absens;

class AbsenController extends Controller
{
    public function index(){

        $data = Absens::all();
        return view ('absensi',compact('data'));
    }

    public function create(){
        return view ('create');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Absens::create($request->all());
        return redirect()->route('absensi')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){

        $data = Absens::find($id);
        //dd($data);

       return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Absens::find($id);
        $data->update($request->all());
        return redirect()->route('absensi')->with('success','Data Berhasil Di Ubah');
    }
}
