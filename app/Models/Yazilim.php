<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Yazilim extends Model
{
    use SoftDeletes;
    protected $table="category";
    protected $fillable=['category'];
}
