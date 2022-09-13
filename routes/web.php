<?php

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
Route::get('GoiController', 'MyController@xinchao');


// Truyền dữ liệu cho Controller
Route::get('testname1/{ten}', 'MyController@KhoaHoc');