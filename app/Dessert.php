<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
    protected $fillable = ["user_id","name","description","ingredient","cost","selling_price","photo"];
}
