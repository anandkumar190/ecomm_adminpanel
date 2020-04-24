<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table="products";
    public $timestamps= true ;
    public $fillable=['id','name','category_id_fk','alias','status'];
}
