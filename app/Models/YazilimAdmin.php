<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class YazilimAdmin extends Model
{
    use SoftDeletes;
    protected $table='yazilim';
    protected $fillable=['yazilim','yazilim_category','yazi'];
}
