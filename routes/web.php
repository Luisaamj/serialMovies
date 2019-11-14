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

/**
 * Unauthenticated Routes
 */
Route::get('/', 'MainController@index')->name('index');

Route::get('/listMovies','MainController@listMovies')->name('listMovies');
Route::get('/insertMovie','MainController@formMovie')->name('insertFormMovie');
Route::post('/insertMovie','MainController@insertMovie')->name('insertMovie');

Route::get('/editMovie/{id}','MainController@editMovie')->name('editFormMovie');
Route::put('/updateMovie/{id}/edit','MainController@updateMovie')->name('updateMovie');

Route::get('/listPeople','MainController@listPeople')->name('listPeople');
Route::get('/insertPerson','MainController@formPerson')->name('insertFormPerson');
Route::post('/insertPerson','MainController@insertPerson')->name('insertPerson');

Route::get('/listCategories','MainController@listCategories')->name('listCategories');
Route::get('/insertCategory','MainController@formCategory')->name('insertFormCategory');
 Route::post('/insertCategory','MainController@insertCategory')->name('insertCategory');


Route::get('/listCountries','MainController@listCountries')->name('listCountries');
Route::get('/insertCountry','MainController@formCountry')->name('insertFormCountry');
Route::post('/insertCountry','MainController@insertCountry')->name('insertCountry');

Route::get('/listLanguages','MainController@listLanguages')->name('listLanguages');
Route::get('/insertLanguage','MainController@formLanguage')->name('insertFormLanguage');
Route::post('/insertLanguage','MainController@insertLanguage')->name('insertLanguage');


/**
 *  Auth & Registration
 */
Auth::routes();

/**
 * Authenticated only Routes
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Backoffice Routes
 */
Route::group(['prefix' => 'admin', 'namespace' => 'Backoffice', 'middleware' => ['auth', 'role:admin|manager']],
    function()
    {
        Route::get('/', 'DashboardController@index')->name('admin');

        Route::resource('user', 'UserController');


    }
);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
