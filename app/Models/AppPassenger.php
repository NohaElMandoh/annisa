<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class AppPassenger extends Model
{
    use HasFactory;
    protected $appends = ['header_title','header_desc','booking_section_title','booking_section_desc',
    'real_time_section_title','real_time_section_desc','cust_options_section_title',
    'cust_options_section_desc','completely_section_title','completely_section_desc',
    'reference_section_title','reference_section_desc'];
    
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

    public function getBookingSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->booking_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->booking_section_title_ar;
        }
    }
    public function getBookingSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->booking_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->booking_section_desc_ar;
        }
    }

    public function getRealTimeSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->real_time_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->real_time_section_title_ar;
        }
    }
    public function getRealTimeSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->real_time_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->real_time_section_desc_ar;
        }
    }
    
     public function getCustOptionsSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->cust_options_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->cust_options_section_title_ar;
        }
    }
    public function getCustOptionsSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->cust_options_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->cust_options_section_desc_ar;
        }
    }
   
    public function getCompletelySectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->completely_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->completely_section_title_ar;
        }
    }
    public function getCompletelySectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->completely_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->completely_section_desc_ar;
        }
    }

    public function getPaymentsSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->payments_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->payments_section_title_ar;
        }
    }
    public function getPaymentsSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->payments_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->payments_section_desc_ar;
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

   
    public function getReferenceSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->reference_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->reference_section_title_ar;
        }
    }
    public function getReferenceSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->reference_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->reference_section_desc_ar;
        }
    }
}
