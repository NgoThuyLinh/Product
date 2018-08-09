<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductDetail;
use App\Product;
use App\ImageProduct;


class ProductDetail extends Model
{
    protected $table = 'product_details';
    protected $fillable = ['product_id', 'size_id', 'color_id','description','quantity'];
    public static function getAll(){
    	$products= ProductDetail::paginate(env('PAGES'));
    	return $products;
    }
    public function product(){
      return $this->hasOne('App\Product','id','product_id');
    }
    public function color(){
      return $this->belongsTo('App\Color');
    }
    public function size(){
      return $this->belongsTo('App\Size');
    }
    public function imageproduct(){
        return $this->hasOne('App\ImageProduct','id','product_id');
    }
}
