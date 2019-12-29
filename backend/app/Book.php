<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
      'title', 'author', 'publisher', 'isbn', 'condition', 'highlighting', 'price', 'sold'
    ];
}