<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Website extends Model
{
    use HasFactory;
    protected $appends = ['title','ourpurpose_name','ourpurpose_title','ourpurpose','download_title'];
   
  
    public function getTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_en;
        } else if (App::isLocale('ar')) {
            return $this->title_ar;
        }
    }

    public function getOurpurposeNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->ourpurpose_name_en;
        } else if (App::isLocale('ar')) {
            return $this->ourpurpose_name_ar;
        }
    }
    

    public function getOurpurposeTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->ourpurpose_title_en;
        } else if (App::isLocale('ar')) {
            return $this->ourpurpose_title_ar;
        }
    }
    
    public function getOurpurposeAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->ourpurpose_en;
        } else if (App::isLocale('ar')) {
            return $this->ourpurpose_ar;
        }
    }
    
    public function getDownloadTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->download_title_en;
        } else if (App::isLocale('ar')) {
            return $this->download_title_ar;
        }
    }
}
