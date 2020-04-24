<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table="category";
    public $timestamps= true ;
    public $fillable=['id','name','alias','status'];
}
