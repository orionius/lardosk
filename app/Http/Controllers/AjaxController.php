<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Document;

class AjaxController extends Controller
{

    public function store(Request $request)
    {
          $chekboxAray = $request->post('chekboxAray');


        foreach ($chekboxAray as $key => $chekbox) {
         // if ($chekbox == true  ) {$chekk =1 ;} else  {$chekk =0 ;}
            DB::table('advent')
                ->where('id', $key+1)
                ->update(array('visible' => $chekk));
        }
        return response()->json(array('msg' => $chekk), 200);
    }


}



