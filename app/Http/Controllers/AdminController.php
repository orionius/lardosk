<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Images;
use App\Advent;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function submitNewPost(request $req)
    {

        $nameuser = Auth::user()->name;
        $user = Auth::user()->id;

        if (Auth::user()->isadmin()) {
            $advent = new Advent;
            $advent->iduser = $user;
            $advent->visible = 1;
            $advent->date_delete = Carbon::now();
            $advent->name = $nameuser ;
            $advent->topic_name=$req->topic_name;
            $advent->description = $req->description;

            $advent->save();

           $ida_dvent = DB::table('advent')->where('iduser', '=', $user)->latest('id')->first();

            $id_advent=10;
            $photo_link = $req->file('image')->store('images', 'public');
            $images = new Images;
            $images->url = $photo_link;
            $images->id_advent = $ida_dvent->id;
            $images->name;
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
