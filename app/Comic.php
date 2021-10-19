<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // ! Aggiungere il campo fillable

    protected $fillable = ['title', 'description', 'thumb', 'price', 'type'];

    protected $table = 'comics';
}
