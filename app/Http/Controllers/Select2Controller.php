<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Select2Controller extends Controller
{
    public function index()
    {
        return view('select2.index');
    }

    public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('users')->select('id', 'email')->where('email', 'LIKE', "%$cari%")->get();
            return response()->json($data);
        }
    }
}
