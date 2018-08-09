<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Category;
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'thumbnail', 'description'];
    public static function getAll(){
    	$categories= Category::all();
    	return $categories;
    }
    public function product(){
      return $this->belongsTo('App\Product');
    }
    
}
