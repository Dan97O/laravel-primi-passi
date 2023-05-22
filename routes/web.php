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

Route::get('/', function () {
    $page_title = 'Hello Laravel';
    return view('home', compact('page_title'));
})->name('home');

Route::get('/contact', function () {
    $page_title = 'Contact Page';
    $description = 'Questa è la pagina dei contatti...';
    $contacts = [
        'email' => [
            'prova@email.com',
            'prova2@email.com',
            'prova3@email.com',
        ],
        'phone' => [
            '3333333333',
            '5555555555',
            '1231231232',
        ],
    ];
    return view('home', compact('page_title'));
})->name('contact');
