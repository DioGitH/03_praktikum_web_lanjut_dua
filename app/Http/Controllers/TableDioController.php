<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TableDio;

class TableDioController extends Controller
{
    // public function index(){
    //     $pengalaman_dio = DB::table('dio')
    //                         ->select('pengalaman_dio')
    //                         ->get();
    //     return view('tableDio', compact('pengalaman_dio'));
    // }
    public function index()
    {
        $table = TableDio::all();

        return view('tableDio', ['table' => $table]);
    }
}
