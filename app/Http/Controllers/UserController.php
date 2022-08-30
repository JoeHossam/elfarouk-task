<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show() {
        return view('users.import');
    }
    
    public function store(Request $req) 
    {
        set_time_limit(180);
        // To calculate excution time
        $start = microtime(true);

        $file = $req->file('file');
        Excel::import(new UsersImport, $file);

        $end = microtime(true) - $start;
        $sec = intval($end);

        return response()->json([
            'message' => "records successfully uploaded",
            'excution_time' => "$sec seconds"
        ]);
    }
}
