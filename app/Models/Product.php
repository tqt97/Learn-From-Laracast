<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function variants(){
        return $this->hasMany(ProductVariant::class);
    }

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function image() {
        return $this->hasOne(Image::class)->ofMany('featured', 'max');
    }

}
