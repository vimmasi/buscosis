<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Aluno;

Route::get('/', function () {
    return view('home', [
        'alunos' => Aluno::all()
    ]);
});

Route::get('/alunos', function () {
    return view('alunos', [
        'alunos' => Aluno::all()
    ]);
});

Route::get('/aluno/{id}', function ($id) {

    $aluno = Arr::first(Aluno::all(), fn ($aluno) => $aluno['id'] == $id);
    
    return view('aluno', ['aluno' => $aluno]);
});

Route::get('/professores', function () {
    return view('professores');
});
