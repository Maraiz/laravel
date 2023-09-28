<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absens;

class AbsenController extends Controller
{
    public function index(){

        $data = absens::all();
        return view ('absensi',compact('data'));
    }
}
