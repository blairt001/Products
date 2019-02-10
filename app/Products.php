<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // add mass assignment
    protected $fillable = ['name','description','price','quantity','category'];
}
