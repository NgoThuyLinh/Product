<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductDetail;

class ImageProduct extends Model
{
    protected $table = 'image_products';
    protected $fillable = ['product_id','links'];
    public function productdetail(){
      return $this->hasOne('App\ProductDetail','product_id','id');
    }
}
