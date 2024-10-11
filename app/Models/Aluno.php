<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->matricula)) {
                $model->matricula = (string) Str::uuid();
            }
        });
    }
}
