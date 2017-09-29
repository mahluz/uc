<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "Gallery";
    protected $fillable = ["user_id","title","description","photo"];
}
