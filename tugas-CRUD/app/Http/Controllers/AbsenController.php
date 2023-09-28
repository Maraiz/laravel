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
        $data = Absens::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('absensi')->with('success','Data Berhasil Di Tambahkan');
    }

    public function editdata($id){
        $data = Absens::find($id);
        return view('editdata', compact('data'));
    }
    
    public function updatedata(Request $request, $id){
        $data = Absens::find($id);
    
        // Mengupdate data lainnya
        $data->update($request->except('foto'));
    
        // Mengelola gambar baru (jika diunggah)
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->move('fotopegawai/', $fotoName);
            $data->foto = $fotoName;
            $data->save();
        }
    
        return redirect()->route('absensi')->with('success','Data Berhasil Di Ubah');
    }
    
    public function delete($id){
        $data = Absens::find($id);
    
        // Hapus foto dari direktori jika ada
        if (!empty($data->foto)) {
            $fotoPath = public_path('fotopegawai/' . $data->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }
    
        $data->delete();
        return redirect()->route('absensi')->with('success','Data Berhasil Di Hapus');
    }
    
}
