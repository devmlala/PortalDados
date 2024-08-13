<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/', function (){
    return view('index');
});

Route::get('/dadosProducaoAcademica', function (){
    return view('dadosProdAcademica');
});

Route::get('/dadosInstitucionais', function (){
    return view('dadosInst');
});

