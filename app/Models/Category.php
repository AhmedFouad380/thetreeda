<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Category extends Model
{
    use HasFactory;
    protected $appends =['name'];
    public function getNameAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Category') . '/' . $image;
        }
        return null;

    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Category');
            $this->attributes['image'] = $imageFields;
        }
    }

    public function Stores(){
        return $this->hasMany(Seller::class ,'category_id');
    }
}
