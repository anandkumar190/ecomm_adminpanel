<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    protected $table="brand";
    public $timestamps= true ;
    public $fillable=['id','name','alias','status'];
 
}
