<?php

use \Illuminate\Support\Facades\Route;
\Illuminate\Support\Facades\Route::get("/reportpkg",function (){
    return "report package";

});


\Illuminate\Support\Facades\Route::group(["namespace"=>"Anisa\Report\Http\Controllers"],function (){

    Route::get("/cc","ReportController@index");

});
