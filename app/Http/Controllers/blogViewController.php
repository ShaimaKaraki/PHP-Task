<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class blogViewController extends Controller
{
    public function index(){

        $bl = DB::table('blogs')->get();
        return view('blogs',  compact('bl'));
    }

    public function show($id){

        $blog = DB::table('blogs')->where('id', $id)->first();
        return view('blogData', compact('blog'));
    }
}
