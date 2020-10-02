<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['id','book_name','book_year','book_category','status'];
}
