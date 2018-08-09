<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
class Vendor extends Model
{
    protected $table = 'vendors';
    protected $fillable = ['name', 'phone','address', 'description'];
    public static function getAll(){
    	$vendors= Vendor::all();
    	return $vendors;
    }
    public function product(){
      return $this->belongsTo('App\Product');
    }
}
