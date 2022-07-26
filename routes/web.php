<?php

use Illuminate\Support\Facades\Route;

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
Route::post('/contactus-save', 'App\Http\Controllers\admin\ContactController@save');


Route::get('/', function () {
    return view('web/index');
});

Route::get('/about', function () {
    return view('web/about');
});

Route::get('/projects', function () {
    return view('web/projects');
});
Route::get('/projects', 'App\Http\Controllers\ProjectController@view');
Route::get('/projects/{id}', 'App\Http\Controllers\ProjectController@viewid');

Route::get('/contact', function () {
    return view('web/contact');
});

// Route::get('/gallery', function () {
//     return view('web/gallery');
// });
Route::get('/gallery','App\Http\Controllers\WebController@webstore');

Route::get('/gallery-details/{id}','App\Http\Controllers\WebController@galleryinner');

Route::get('/contact', function () {
    return view('web/contact');
});

// login pnel




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/save-gallery', [App\Http\Controllers\admin\GalleryController::class, 'store']);



Route::group(['middleware' => ['auth']], function() {

    Route::get('/add-gallery', function () {
        return view('admin/add-gallery');
    });
    // Route::post('/save-gallery','App\Http\Controllers\admin\GalleryController@store');
    // Route::get('/view-gallery','App\Http\Controllers\admin\GalleryController@view');
    // Route::get('/edit-gallery/{id}','App\Http\Controllers\admin\GalleryController@edit');
    // Route::post('/update-gallery/{id}','App\Http\Controllers\admin\GalleryController@update');
    // Route::get('/gallery-delete/{id}','App\Http\Controllers\admin\GalleryController@delete');


    
    Route::get('/contactus','App\Http\Controllers\admin\ContactController@view');
    Route::get('/contact-delete/{id}','App\Http\Controllers\admin\ContactController@distroy');
    Route::get('/add-project','App\Http\Controllers\admin\ProjectController@view');
    Route::post('/project-save', 'App\Http\Controllers\admin\ProjectController@save');
    Route::get('/project-delete/{id}', 'App\Http\Controllers\admin\ProjectController@distroy');
    Route::get('/project-add-images/{id}', 'App\Http\Controllers\admin\ProjectController@collect');
    Route::get('/project-edit/{id}', 'App\Http\Controllers\admin\ProjectController@edit');
    Route::post('/project-update/{id}', 'App\Http\Controllers\admin\ProjectController@update');
    Route::get('/view-project','App\Http\Controllers\admin\ProjectController@list');
    Route::post('/project-image', 'App\Http\Controllers\admin\ProjectController@image_save');
    Route::get('/delete-project-image/{id}', 'App\Http\Controllers\admin\ProjectController@distroyimage');
});