<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TableDaniController extends Controller
{
    public function index(){
        $pengalaman_dani = DB::table('dani')
                            ->select('pengalaman_dani')
                            ->get();

        return view('tableDani', compact('pengalaman_dani'));
    }
}
