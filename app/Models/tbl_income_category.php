<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_income_category extends Model
{
    use HasFactory;
    protected $table = 'tbl_income_category';
    protected $fillable = ['category_name', 'created_at', 'updated_at',];
}
