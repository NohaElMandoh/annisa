<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Price extends Model
{
    use HasFactory;
    protected $appends = ['title','desc','price_desc'];
   
  
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }
    public function getPriceDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->price_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->price_desc_ar;
        }
    }

    public function proberities()
    {
      return $this->belongsToMany('App\Models\PricingProperty','prices_pricing_properties');
    }
}
