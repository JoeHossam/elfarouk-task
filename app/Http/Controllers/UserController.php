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
        $file = $req->file('file');
        Excel::import(new UsersImport, $file);

        return response()->json([
            'message' => "records successfully uploaded"
        ]);
    }
}
