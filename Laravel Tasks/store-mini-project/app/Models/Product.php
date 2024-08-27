<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['prod_name', 'prod_des', 'prod_price', 'prod_img', 'category_id'];

    use SoftDeletes;
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
