<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{

    public function submitNewPost(request $req)
    {
        if (Auth::user()->isadmin()) {
           $photo_link = $req->file('image')->store('images', 'public');

            $Conference = new Images;
            $Conference->photo_link = $photo_link;
            $Conference->conference_name = $request->input('topic_name');
            $Conference->dates = $request->input('start_date');
            $Conference->venue = $request->input('location');
            $Conference->save();


            return view('admin_newpost' );
        }
    }
    public function admin()
    {
        if (Auth::user()->isadmin()) {
            return view('admin_newpost' );
        }
    }

    public function newPost()
    {
        if (Auth::user()->isadmin()) {
            return view('admin_newpost' );
        }
    }


}
