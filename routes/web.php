<?php
//Alert::success('Success Title', 'Success Message');


use Illuminate\Support\Facades\Route;
use App\helper\helper;
use App\Http\Controllers\slider_controller as slider;
use RealRashid\SweetAlert\Facades\Alert;



Route::get('/slider/{hash_city}',[slider::class,'slider'])->name('slider');
Route::get('/',function (){
   return view('index');
})->name('index');

