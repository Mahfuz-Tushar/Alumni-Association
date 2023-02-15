<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\StudentsController;
use App\Models\Admin;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DemoController::class, 'index'])->name('home');
Route::get('/about', [DemoController::class, 'about'])->name('about');
Route::get('/contact', [DemoController::class, 'contact'])->name('contact');
Route::get('/our-mission', [DemoController::class, 'ourMission'])->name('ourMission');
route::get('/cons', [DemoController::class, 'cons'])->name('cons');
Route::post('/search', [DemoController::class, 'search'])->name('search');
Route::get('/table', [DemoController::class, 'onselect'])->name('select');
Route::get('/dashboard',[StudentsController::class,'dashboard'])->name('add.dashboard');
Route::get('/create',[StudentsController::class,'create'])->name('add.create');
Route::post('/store',[StudentsController::class,'store'])->name('add.store'  );
Route::get('/edit/{id}',[StudentsController::class,'edit'])->name('add.edit');
Route::post('/update/{id}',[StudentsController::class,'update'])->name('add.update');
Route::get('/delete/{id}',[StudentsController::class,'delete'])->name('add.delete');

Route::get('/regi',[StudentsController::class,'regiShow'])->name('regi.show');

Route::get('/regi/custom',[StudentsController::class,'regiShowCustom'])->name('regi.show.custom');

// Route::get('/home', function () {
//     return view('index');
// });

//Route::get('/our-mission', function () {
    //return view('ourMission');
//});
// Route::get('/cons', function () {
//     return view('cons');
// });



// Route::get('/contact', function () {
//     return view('contact');
// });


// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/dashboard', function () {
    $user = User::where('is_admin',NULL)->get();
    return view('dashboard',compact('user'));
    
})->middleware(['auth'])->name('dashboard');


 


require __DIR__.'/auth.php';
