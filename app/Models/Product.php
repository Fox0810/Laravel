<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['user_id', 'catalog_id', 'name', 'about', 'price', 'picture', 'status'];
    public function catalog(){
        return $this->belongsTo(Catalog::class);
    }
}
