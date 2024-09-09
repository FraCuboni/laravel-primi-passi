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

Route::get('/', function () {
    $title = 'Ciao, sei nella home!!!';
    $subtitle = 'Si proprio nella home, hai capito bene!!!';
    $table_title = 'ecco un elenco di cose a caso';
    $displayTable = true;
    $list = [
        'Panino alla mortadella',
        'Marco Pannella',
        'La Gioconda',
        "Giovanna D'arco",
        "L'induismo",
        'I Gatti siamesi',
        'Il diritto penale',
        'PES 2008',
        'Radja Naingollan',
        'PoltroneSofà',
        'Il Baratto'
    ];
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/other', function () {
    return view('other');
});

// completed, sorry for the one commit work :/
