<?php

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
// named route
Route::get('/', function () {

    $mydata = [
        'name' => 'Ali',
        'age' => 40,
    ];

    return view('welcome', ['mydata' => $mydata]);
})->name('back.to.main.page');

//View Route (1)
Route::get('/hello', function () {
    $mydata = [
        'name' => 'Ali',
        'age' => 40,
    ];
    return view('mytest.hello', ['data' => $mydata]);
});

//View Route (2)
// with data
$mydata2 = [
    'name' => 'Ali',
    'age' => 40,
];
Route::view('hello2', 'welcome', ['mydata' => $mydata2]);

// Redirect Route - Internal
Route::redirect('testtest', 'hello2');

// Redirect Route - External
Route::redirect('testtest2', 'https://www.google.com');

// group - prefix
Route::prefix('employee')->group(function(){
    Route::get('change-password', function(){
        dd('change password');
    });
    
    Route::get('edit-user', function(){
        dd('edit user');
    });

});