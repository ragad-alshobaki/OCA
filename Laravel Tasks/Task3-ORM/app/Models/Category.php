<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $fillable = ['category_name', 'category_description'];

    use SoftDeletes;

    use HasFactory;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
