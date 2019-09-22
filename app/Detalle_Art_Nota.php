<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalle_Art_Nota extends Model
{
    use SoftDeletes;
    protected $guarded = ['id'];
}    