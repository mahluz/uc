<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $table = "drinks";
    protected $fillable = ["user_id","name","description","cost","selling_price","photo"];
}
