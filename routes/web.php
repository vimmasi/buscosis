<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Aluno;

Route::get('/', function () {
    return view('home', [
        'alunos' => Aluno::take(5)->get()
    ]);
});

Route::get('/alunos', function () {
    return view('alunos', [
        'alunos' => Aluno::all()
    ]);
});

Route::get('/aluno/{id}', function ($id) {

    $aluno = Arr::first(Aluno::all(), fn($aluno) => $aluno['id'] == $id);

    return view('aluno', ['aluno' => $aluno]);
});

Route::get('/professores', function () {
    return view('professores');
});

Route::get('/financeiro', function () {
    return view('financeiro');
});
