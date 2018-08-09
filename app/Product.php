<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\ProductDetail;
use App\Vendor;
use App\Category;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['code', 'name', 'historical_cost','price','description','vendor_id','category_id','sex','thumbnail'];
    public static function getAll(){
    	$products= Product::paginate(env('PAGES'));
    	return $products;
    }
    public function productdetail(){
      return $this->hasMany('App\ProductDetail','product_id','id');
    }
    
    public function vendor(){
      return $this->belongsTo('App\Vendor');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }
}
