<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Webdramacontroller;
use App\Http\Controllers\BadGeniuscotroller;
use App\Http\Controllers\Blacklistcontroller;
use App\Http\Controllers\TheCommentcontroller;

Route::get('/', [Webdramacontroller:: class,"index"]);
Route::get('/Blacklist', [Blacklistcontroller::class, "index"]);
Route::get('/BadGenius', [BadGeniuscotroller::class, "index"]);
Route::get('/The Comment', [TheCommentcontroller::class,"index"]);
