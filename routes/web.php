<?php

use App\Http\Controllers\MyController;
use Illuminate\Database\PDO\MySqlDriver;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('domain', function () {
    return "Xin chào";
    // echo "Xin chào 2";
});


//  TRUYỀN THAM SỐ
Route::get('domain1/{name}', function ($name) {
    echo "hiển thị domain cuối: ".$name;
});


//  GÁN ĐIỀU KIỆN
Route::get('domain2/{date}', function ($date) {
    echo "$date";
})->where(['date'=>'[0-9 a-z A-Z]+']);


//  ĐỊNH DANH CHO ROUTE #1
Route::get('domain3x', ['as'=>'newdomain3', function (){
    return "xin chào newdomain3";
}]);


//  GỌI ROUTE RA (gọi domain3x)
Route::get('domain4x', function (){
    return redirect()->route('newdomain3');
});



//     ĐỊNH DANH CHO ROUTE #2
Route::get('domain3y', function (){
    echo "đây là domain3y";
})->name('mydomain');



// GỌI ROUTE RA (gọi domain3y)
Route::get('domain4y', function (){
    return redirect()->route('mydomain');
});


// ROUTE GROUP
Route::group(['prefix'=>'MyGroup'], function (){
    Route::get('User1', function (){
        echo "User1";
    });
    Route::get('User2', function (){
        echo "User2";
    });
    Route::get('User3', function (){
        echo "User3";
    });
});


//  Gọi Controller
Route::get('GoiController', [MyController::class, 'xinchao']);



// Truyền dữ liệu cho Controller
Route::get('testname1/{ten}', [MyController::class, 'KhoaHoc']);



// Làm việc với URL trên Request
Route::get('MyRequest', [MyController::class, 'GetURL']);



// Gửi nhận dữ liệu trên Request(view)
Route::get('getForm', function (){
    return view('postFormView');
});
Route::post('postForm', [MyController::class, 'postForm1'])->name('postForm');



// Sử dụng cookie với request và response
Route::get('setCookie', [MyController::class, 'setCookie']);
Route::get('getCookie', [MyController::class, 'getCookie']);



// Uplload file
Route::get('linkFile', function (){
	return view('uploadFileView');
});
Route::post('postFile', [MyController::class, 'hamUpload'])->name('postFile');



// Xuất dữ liệu dạng JSON
Route::get('getJson', [MyController::class, 'hamJson']);



//View
Route::get('linkView1', [MyController::class, 'hamView1']);
Route::post('linkView2', [MyController::class, 'hamView2'])->name('linkView2');
// View dùng chung
View::share('bien_duyhau', 'GIÁ TRỊ BIẾN DÙNG CHUNG');


// TEMPLATE vs Css
Route::get('linkTemplate', function(){
    return view('papes.pape1');
    // return view('papes.pape2');
});





