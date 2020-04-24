<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemteImgModel extends Model
{
    protected $table="item_img";
    public $timestamps=false;
    public $fillable=['id','title','path'];
}
