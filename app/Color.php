<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductDetail;
use App\Color;

class Color extends Model
{
    protected $table = 'colors';
    protected $fillable = ['name','color'];
    public function productdetail(){
      return $this->belongsTo('App\ProductDetail');
    }
}
