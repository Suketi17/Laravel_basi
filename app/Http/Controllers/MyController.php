<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyController extends Controller
{
    //  Gọi Controller
    public function xinchao(){
        echo "Gọi Controller";
    }

    // Truyền dữ liệu cho Controller
    public function KhoaHoc ($ten){
        echo "$ten";
        return redirect()->route('newdomain3');
    }

    // Làm việc với URL trên Request
    public function GetURL(Request $request){
        return $request->path(); //->url(); sẽ lấy tất cả url
    }
    
    // Gửi nhận dữ liệu trên Request
    public function postForm(Request $request){
        echo $request->hoten;
    }

    // Sử dụng cookie với request và response
    public function setCookie(){
        $response = new Response();
        $response->whitCookie('duyhau', 'Nguyễn Duy Hậu', 1);
        return $response;
    }

    public function getCookie(Request $request){
        return $request->cookie('duyhau');
        echo "thành công!";
    }

    public function hamUpload(Request $request){
        if($request->hasFile('fileName')){
            echo "Upload thành công!";
        }else
            echo "Hãy chọn file";
    }
}
