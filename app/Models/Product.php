<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product extends Model
{
    use HasFactory;

    protected $appends = ['title', 'description'];

    public function getTitleAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_title;
        } else {
            return $this->en_title;
        }
    }

    public function getDescriptionAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'name' => ''
        ]);
    }

    public function Seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id')->withDefault([
            'name' => ''
        ]);
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Product') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Product');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function Images()
    {
        return $this->hasMany(ProductImages::class, 'product_id');
    }
}
