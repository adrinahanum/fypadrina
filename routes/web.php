<?php
use App\Pcname;
use App\User;
use App\Service;
use App\Times;
//use Illuminate\Support\Facades\Route;

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

// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello,this',
//         'my-second-post' => 'Now. i am getting'
//     ];
    
//     if (! array_key_exists($post, $posts)){
//             abort(404, 'Sorry ,post was not found');
//     };
    
//     return view('post', [
//         'post' => $posts [$post] ?? 'nothing here'
//     ]);
// //    // return $name;

//     // return view('test', [
//     //     'name' => request('name')
//     // ]);


//Route::get('/posts/{post}', 'PostsController@show');
Route::get('/', function(){
    return view('welcome');
});

Route::get('/recommend', function(){
    return view('recommend',[
        'pcname'=>App\Pcname::take(3)->latest()->get()
    ]);
});

Route::get('/pcname', 'PCnameController@index');
Route::post('/pcname', 'PCnameController@store');
Route::get('/pcname/create', 'PCnameController@create');
Route::get('/pcname/{pcname}', 'PCnameController@show');
Route::get('/pcname/{pcname}/edit', 'PCnameController@edit');

Route::get('/service', 'ServiceController@index');  //baru buat,nanti tengok balik
Route::post('/service', 'ServiceController@store');
Route::match(['GET', 'POST'], '/service/create', 'ServiceController@create')->name('service.create');
Route::get('/service/{service}', 'ServiceController@show');
Route::get('/service/{service}/edit', 'ServiceController@edit');

//Route::get('/service', 'TimesController@index');  
//Route::post('/service', 'ServiceController@store');
//Route::get('/service/create', 'ServiceController@create');
Route::get('/service/{times}', 'ServiceController@show');
Route::get('/service/{times}/edit', 'TimesController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
