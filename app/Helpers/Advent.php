<?php

use App\Advent;
use App\CustomCollection;
use Illuminate\Database\Eloquent\Model;

function adventAll()
{
    $advents = Advent::all();

    return $advents;
}
