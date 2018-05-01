<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PageController extends Controller
{
    public function show() {
        
        $pages = DB::table('pages')->get();

        return view('pages.show', compact('pages'));
    }
}
