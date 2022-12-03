<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class Seller extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['ar_name','en_name','owner_name','phone','email','password'];
    protected $appends =['name','description'];
    public function getNameAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
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
    public function Products(){
        return $this->hasMany(Product::class ,'seller_id')->where('is_active','active')->limit(16);
    }



    public function getCoverAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Seller') . '/' . $image;
        }
        return null;

    }

    public function setCoverAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Seller');
            $this->attributes['cover'] = $imageFields;
        }
    }
    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Seller') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Seller');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function Category(){
        return $this->belongsTo(Category::class ,'category_id')->withDefault([
            'name'=>''
        ]);
    }

}
