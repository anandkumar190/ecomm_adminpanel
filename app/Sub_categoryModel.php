<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_categoryModel extends Model
{
    protected $table="sub_category";
    public $timestamps= true ;
    public $fillable=['id','name','category_id_fk','alias','status'];
}
