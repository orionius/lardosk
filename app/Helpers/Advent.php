<?php

use App\Advent;
use App\CustomCollection;
use Illuminate\Database\Eloquent\Model;

function adventAll()
{
    $advents = Advent::all();
    return $advents;
}

function adventId($id)
{
  //  $advents = Advent::where('id', '=', $id)->first();
    $advents = Advent::find($id);
  //  ->take(1)->get()
    return $advents;
}
