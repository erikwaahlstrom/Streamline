<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('/login');
});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    // Route::get('/login', 'PageController@showLoginView');
    // Route::get('/register', 'PageController@showRegisterView');
    Route::get('/registertransport', 'PageController@showRegisterTransportView');

        Route::post('/newsupplier', 'SupplierController@store');
        Route::post('/newuser', 'UserController@store');
        Route::get('/edit', 'EditController@index');
    // Auth middleware routes
    // Route::group(['middleware' => 'auth', function() {
        Route::get('/dashboard', 'PageController@showDashboardView');
        Route::get('/confirmed', 'PageController@showConfirmedView');
        Route::get('/create', 'PageController@showCreateView');

        Route::post('/newbooking', 'BookingController@store');
        Route::get('/newbooking', 'PageController@showArrivaldateView');



        Route::get('/deliveries', 'BookingController@index');

        Route::get('/createUser', 'PageController@showCreateUserView');
    // }]);

        Route::post('/deletebooking', 'BookingController@delete');
        Route::post('/setdropplace', 'BookingController@update');

        Route::post('/deletesupplier', 'EditController@delete');
        Route::post('/editsupplier', 'EditController@update');

});
