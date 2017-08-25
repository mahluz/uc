<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = ['user_id','name','description','ingredient','cost','selling_price','photo'];
}
