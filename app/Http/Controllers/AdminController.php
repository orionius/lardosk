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
            $advent->save();


       /*     $advent_user = Advent::where('iduser', '=', $user)->get();*/

/*            $idadvent = DB::table('advent')->latest('id')->first();*/
            $idadvent=10;
            $photo_link = $req->file('image')->store('images', 'public');
            $images = new Images;
            $images->url = $photo_link;
            $images->id_advent = $idadvent;
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
