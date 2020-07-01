<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('tables');
    }

    public function dataTables(){
        return view('data-tables');
    }
}
