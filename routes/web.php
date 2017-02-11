<?php

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

// Index Route.
Route::get('/', function () {
    return view('welcome');
});

// Bootstrap Test Route.
Route::get('bootstrap', function () {
    return view('firstbootstrap');
});

// Authentication Routes
Auth::routes();

// RERA Dashboard Home Landing Page Routing.
Route::get('home', 'HomeController@index')->middleware('auth');

// User Login Form Routing.
Route::get('user/login', 'UserAuth\LoginController@showLoginForm');
Route::post('user/login', 'UserAuth\LoginController@login');
Route::post('user/logout', 'UserAuth\LoginController@logout');

// User Register Form Routing.
Route::get('user/register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user/register', 'UserAuth\RegisterController@register');

// User Passwords Form Routing.
Route::post('user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');


// Admin Login Form Routing.
Route::get('admin/login', 'AdminAuth\LoginController@showLoginForm');
Route::post('admin/login', 'AdminAuth\LoginController@login');
Route::post('admin/logout', 'AdminAuth\LoginController@logout');

// Admin Register Form Routing.
Route::get('admin/register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('admin/register', 'AdminAuth\RegisterController@register');

// Admin Passwords Reset Form Routing.
Route::post('admin/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('admin/password/reset', 'AdminAuth\ResetPasswordController@reset');
Route::get('admin/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('admin/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

// API Controller Routing For Dependant Dynamic Drop Down Feature of Multi-Step Form Wizard.
Route::get('ajaxJsonResponse', 'HomeController@ajaxJsonResponse');
// API Test 1 - working.
Route::get('prodview','TestController@prodfunct');
Route::get('findProductName','TestController@findProductName');
Route::get('findPrice','TestController@findPrice');
// Test 2 (Closure)
// Route::get('names/{id}', function($id) {$names = array(1 => "John", 2 => "Mary", 3 => "Steven"); return array($id => $names[$id]);});
//Route::resource('names', 'NameController');

// Test Roles Feature
//Route::group(['middleware' => 'web'], function () {
    //Route::get('/', function () {
        //return view('index');
    //})->name('main');
    //Route::get('/author', [
        //'uses' => 'AppController@getAuthorPage',
        //'as' => 'author',
        //'middleware' => 'roles',
        //'roles' => ['Admin', 'Author']
    //]);
    //Route::get('/author/generate-article', [
        //'uses' => 'AppController@getGenerateArticle',
        //'as' => 'author.article',
        //'middleware' => 'roles',
        //'roles' => ['Author']
    //]);
    //Route::get('/admin', [
        //'uses' => 'AppController@getAdminPage',
        //'as' => 'admin',
        //'middleware' => 'roles',
        //'roles' => ['Admin']
    //]);
    //Route::post('/admin/assign-roles', [
       // 'uses' => 'AppController@postAdminAssignRoles',
       // 'as' => 'admin.assign',
        //'middleware' => 'roles',
        //'roles' => ['Admin']
    //]);
    //Route::get('/signup', [
       // 'uses' => 'AuthController@getSignUpPage',
       // 'as' => 'signup'
   // ]);
   // Route::post('/signup', [
     //   'uses' => 'AuthController@postSignUp',
      //  'as' => 'signup'
    //]);
    //Route::get('/signin', [
       // 'uses' => 'AuthController@getSignInPage',
       // 'as' => 'signin'
   // ]);
   // Route::post('/signin', [
      //  'uses' => 'AuthController@postSignIn',
      //  'as' => 'signin'
    //]);
    //Route::get('/logout', [
      //  'uses' => 'AuthController@getLogout',
      //  'as' => 'logout'
    //]);
//});

// Laravel Collective Test Route
Route::get('form', function () {
    return view('newformpage');
});