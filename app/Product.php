<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    public $table = 'product';
    protected $fillable = [
        'category_id', 'quantity', 'price'
    ];

    public function category()
    {
        //return Category::where('id', $this->category_id)->first()->name;
        return $this->belongsTo('App\Category');
    }
}
