<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Custorm;

class Custorm extends Model
{
    protected $table = 'shoppingcarts';
    protected $fillable = ['name','phone','address'];
   
}