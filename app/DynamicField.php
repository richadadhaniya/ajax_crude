<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    public $table = "product_stocks";
    
    public $fillable = ['first_name', 'last_name', 'address'];
}
