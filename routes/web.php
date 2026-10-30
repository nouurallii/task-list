<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    $name = 'Nour Ali ';
  $departments =[
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales',
    ];
    // return view('about')->with('name,$name);
    // return view('about', ['name' => $name]);
    return view('about', compact('name', 'departments'));
});
Route::post('/about', function () {

   $name =$_POST['name'];

    $departments =[
        '01' => 'Tichnical',
        '02' => 'Financial',
        '03' => 'Sales',
    ];
return view('about', compact('name', 'departments'));
});
Route::get('tasks', function(){
return view('tasks');
});
Route::post('create' , function(){
    $task_name = $_POST['name'];
    DB::table('tasks')->insert(['name'=> $task_name]);
    return view('tasks') ;
    //return redirect('/tasks');
});
