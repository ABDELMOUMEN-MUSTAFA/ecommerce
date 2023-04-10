<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Subcategory;
use App\models\Product;

class Category extends Model
{
    use HasFactory;

    public function subcategories()
    {
    	return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
