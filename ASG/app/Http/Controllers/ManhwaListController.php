<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manhwa;

class ManhwaListController extends Controller
{
    //
    function show(){
        $data=manhwa::all();
        return view('manhwa',['manhwa'=>$data]);
    }
}
