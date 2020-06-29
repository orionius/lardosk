<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Images;


class AdminController extends Controller
{

    public function submitNewPost(request $req)
    {
        if (Auth::user()->isadmin()) {
            $photo_link = $req->file('image')->store('images', 'public');
            $images = new Images;
            $images->url = $photo_link;
            $images->save();

            return view('admin_newpost');
        }
    }

    public function admin()
    {
        if (Auth::user()->isadmin()) {
            return view('admin_newpost');
        }
    }

    public function newPost()
    {
        if (Auth::user()->isadmin()) {
            return view('admin_newpost');
        }
    }


}
