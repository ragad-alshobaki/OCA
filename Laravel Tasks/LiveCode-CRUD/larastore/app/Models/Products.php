<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Products extends Model
{
    protected $fillable = ['p_name', 'p_descrption', 'p_price'];
    
    use SoftDeletes;

    use HasFactory;
}
