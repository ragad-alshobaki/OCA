<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['cat_name','cat_img'];

    use SoftDeletes;

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
