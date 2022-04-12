<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPostController;
use App\Models\Posts;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

//====================Bai tap=============================
Route::get('admin/post', function () {
    return "danh sach bai viet";
});
Route::get('admin/post/add', function () {
    return "them bai viet";
});
Route::get('admin/post/update/{$id}', function ($id) {
    return "cap nhat bai viet co id : {$id}";
});
Route::get('admin/post/delete/{id}', function ($id) {
    return "Xoa bai viet co id: {$id}";
});



// dinh tuyen co ban


Route::get('/post', function () {
    return "Day la trang baii viet";
});


// dinh tuyen co tham so


Route::get('/post/{post_id}', function ($post_id) {
    return $post_id;
});

Route::get('/post/{cat_id}/page/{page}', function ($cat_id, $page) {
    return "cat_id:" . $cat_id . '-' . "page:" . $page;
});


// dat ten cho dinh tuyen
// Route::get('/product/add', function () {
//     // tra ve duong dan 
//     return route('product.add');
// })->name('product.add');

// // dinh tuyen co tham so tuy chon 

// Route::get('/users/{id?}', function ($id = 0) {
//     return $id;
// });

// dinh tuyen voi tham so co rang buoc

// Route::get('/product/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('/product/{slug}/{id}', function ($slug, $id) {
//     return $id . '-----------' . $slug;
//     // global rang buoc
//     // app/ provider/router
// })->where(['slug' => '[A-Za-z0-9-_]+']);



// dinh  tuyen qua 1 view


Route::view('/welcome', 'welcome');


// Route::view('/post', 'post', ['id' => 20]);



//dinh tuyen den 1 controller

// Route::get('/post', [PostController::class, 'index']);

Route::get('/product/show', 'ProductController@show');
// Route::get('/product/show/{id}', [ProductController::class, 'show']);
// Route::get('/product/add', [ProductController::class, 'add']);



// Route::get('/post', [PostController::class, 'index']);


// ===============================Bai TAP phan 6===================================

Route::get('/admin/post/show/{id}', [AdminPostController::class, 'show']);
Route::get('/admin/post/add', [AdminPostController::class, 'add']);
Route::get('/admin/post/update/{id}', [AdminPostController::class, 'update']);
Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete']);


// ================================================================================

Route::get('/child', function () {
    return view('/child', ['name' => 'nguyen hai pphuc', 'address' => '<strong>nghĩa dũng ba đình</strong>', 'number' => '5']);
});


Route::view('/demo', 'demo');

//'========================================Bai tap phan 7==========================

Route::get('admin/post/show/{id}', [AdminPostController::class, 'show']);
Route::get('admin/post/add', [AdminPostController::class, 'add']);
Route::get('admin/post/update/{id}', [AdminPostController::class, 'update']);



// ================================================================================


// insert route

Route::get('users/insert', function () {
    DB::table('users')->insert(
        ['user_name' => 'phucc_unitop']
    );
});
Route::get('posts/add', [PostController::class, 'add']);
Route::get('posts/show', [PostController::class, 'show']);



// update

Route::get('posts/update/{id}', [PostController::class, 'update']);

// delete

Route::get('posts/delete/{id}', [PostController::class, 'delete']);


// ============================================bai tap pan 9=================================
// Route::get('product/add', [ProductController::class, 'add']);
// Route::get('product/show/{id}', [ProductController::class, 'show']);
// Route::get('product/update/{id}', [ProductController::class, 'update']);
// Route::get('product/delete/{id}', [ProductController::class, 'delete']);
// ==========================================================================================


// eloquent ORM



//get value (route)
// Route::get('posts/read', function () {
//     $posts = Posts::all();
//     return $posts;
// });


// get value controller
Route::get('posts/read', [PostController::class, 'read']);

//restone
Route::get('posts/restore/{id}', [PostController::class, 'restore']);

//permanentlyDelete
Route::get('posts/permanentlyDelete/{id}', [PostController::class, 'permanentlyDelete']);
