<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemsModel extends Model
{
    protected $table="items";
    public $timestamps= true ;
    public $fillable=['id','name','alias','cat_id_fk','s_cat_id_fk','product_type_id_fk','brand_id_fk','mrp_price','a_price','a_price','quantity','start_date','ena_date','country_id','discount','description'];

}
