<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Professor extends Model
{
    use Notifiable;

    protected $fillable = [
        'nome', 'email', 'senha'
    ];

    protected $guard = 'professor';
}
