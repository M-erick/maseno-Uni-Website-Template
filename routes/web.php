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




Route::view('/', 'index')->name('home');

Route::prefix('maseno')->group(function () {

    Route::view('/about', 'page.about')->name('aboutMaseno');


    Route::view('/schools', 'page.schools')->name('schools');


    Route::view('/admission', 'page.admission')->name('admission');
    Route::view('/Student', 'page.student')->name('student');

    Route::view('/Library', 'page.library')->name('library');

    Route::view('/eCampus', 'page.ecampus')->name('ecampus');
    Route::view('/research', 'page.research')->name('research');
    Route::view('/staff', 'page.staff')->name('staff');
    Route::view('/Contacts', 'page.contacts')->name('contacts');

    Route::view('/university-Council', 'AboutMaseno.council')->name('council');

});
