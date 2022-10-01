<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class UberClone extends Model
{
    use HasFactory;
    protected $appends = [
        'header_title', 'header_desc','driver_app_section_title','driver_app_section_desc','passenger_app_section_title','dispatch_section_title'
        ,'passenger_app_section_desc','dispatch_section_desc','drives_section_desc','drives_section_title'
    ];


    public function getHeaderTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->header_title_en;
        } else if (App::isLocale('ar')) {
            return $this->header_title_ar;
        }
    }
    public function getHeaderDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->header_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->header_desc_ar;
        }
    }
    public function getDriverAppSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->driver_app_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->driver_app_section_title_ar;
        }
    }
    public function getDriverAppSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->driver_app_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->driver_app_section_desc_ar;
        }
    }

   
    public function getPassengerAppSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->passenger_app_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->passenger_app_section_title_ar;
        }
    }
    public function getPassengerAppSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->passenger_app_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->passenger_app_section_desc_ar;
        }
    }
    public function getDispatchSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->dispatch_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->dispatch_section_title_ar;
        }
    }
    public function getDispatchSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->dispatch_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->dispatch_section_desc_ar;
        }
    }
    public function getDriversSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->drivers_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->drivers_section_title_ar;
        }
    }
    public function getDriversSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->drivers_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->drivers_section_desc_ar;
        }
    }
    
}
