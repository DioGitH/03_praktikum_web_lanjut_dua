<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function pengalamanKuliah(){
        return view('pengalaman');
    }
}
