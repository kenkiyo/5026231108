<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

Route::get('/publishfrontend', function () {
    return view('publishfrontend');
});

Route::get('/ets', function () {
    return view('ets');
});

Route::get('/ltree', function () {
    return view('ltree');
});

Route::get('/p1', function () {
    return view('p1');
});

Route::get('/p4', function () {
    return view('p4');
});

Route::get('/p7part1', function () {
    return view('p7part1');
});

Route::get('/p7part2', function () {
    return view('p7part2');
});
