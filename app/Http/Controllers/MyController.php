<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function xinchao(){
        echo "Gọi Controller";
    }

    public function KhoaHoc ($ten){
        echo "$ten";
        return redirect()->route('newdomain3');
    }
}
