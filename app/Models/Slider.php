<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Slider extends Model
{
    use HasFactory;

    protected $appends = ['title','desc','long_desc','overlay_title','overlay_long_desc'];
   
  
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }
    
    public function getOverLayTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->overlay_title_en;
        } else if (App::isLocale('ar')) {
            return $this->overlay_title_ar;
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

    public function getLongDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->long_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->long_desc_ar;
        }
    }
    public function getOverLayLongDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->overlay_long_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->overlay_long_desc_ar;
        }
    }

   
}
