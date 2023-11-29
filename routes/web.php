<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/user-form',function(){
    $title='Sent session_register';
    return view('user_form')->with('title',$title);
});
Route::post('/get-userdata',function(Request $request){
        // dd($request->all());
        $name=$request->input('name');
        $age=$request->input('age');
        $mobile=$request->input('mobile');

        //Redireact
        return redirect('user-form')->with('message','Successfully form submitted!');
        //return ' Hi, My name is ' .$name.' and My age is ' .$age. ' and mobile is '.$mobile;
});
Route::get('/',function(){
  return view('home');
});

Route::get('/contact',function(){
    return view('contact');
});
