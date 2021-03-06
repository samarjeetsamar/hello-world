<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();
//pages controller 
Route::get('/', 'HomeController@index');
Route::get('/aboutus', 'PagesController@aboutUs');
Route::get('/contact', 'PagesController@contactForm');

//admin controller 
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/blogs', 'AdminController@pages');

//post controller
Route::get('/admin/add-blog', 'PostController@AddNewBlog');
Route::post('admin/submit-blog', 'PostController@AddNewBlogForm');
Route::get('admin/post-delete/{id}', 'PostController@DeletePost');
Route::get('/admin', 'AdminController@admin')->middleware('is_admin')->name('admin');
Route::get('/admin/edit-post/{id}','PostController@EditPostView');
Route::post('/admin/form-update-blog','PostController@UpdatePost');



//test route

Route::get('/test', function () {
    $data =  'fdsdsdsdsdsdsdsdsdsdsdsdsd';
    echo $data;
    die;
});




