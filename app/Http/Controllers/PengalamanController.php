<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function pengalamanKuliah(){
        return view('pengalaman');
    }
}
