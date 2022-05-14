<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{

   protected $fillable = [
     'category_code', 
     'item_code', 
     'description'
    ];

   public function category()
   {

      return $this->belongsTo('App\Models\Category', 'category_code', 'code');

   }
}
