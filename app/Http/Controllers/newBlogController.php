<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//new blog

class newBlogController extends Controller
{
    public function showForm(){
        return view('create');
    }

    public function validateForm(Request $request){
        // validate the info, create rules for the inputs

        $this->validate($request,[
         'title'=>'required|string|max:255',
         'body'=>'required'
        ]);

        //get the info
        $title = $request->input('title');
        $body = $request->input('body');

        //insert new blog into DB
        $id = DB::table('blogs')->insertGetId(
               ['title' => $title,
                'body' => $body,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')]
        );
        return redirect('/blogs')->with('message','New Blog inserted successfully!');
    }
}
