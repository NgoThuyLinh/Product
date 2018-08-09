<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';
    protected $fillable = ['name','description'];
    public function productdetail(){
      return $this->belongsTo('App\ProductDetail');
    }
    
}
