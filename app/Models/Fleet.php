<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Fleet extends Model
{
    use HasFactory;

    protected $appends = [
        'header_title', 'header_desc', 'title_section', 'dispatch_section_title', 'dispatch_section_desc', 'web_booker_section_title', 
        'web_booker_section_desc', 'external_sources_section_title', 'external_sources_section_desc',
        'passenger_app_section_title', 'passenger_app_section_desc','taxibutler_section_title','taxibutler_section_desc',
        'plan_section_title','plan_section_desc','plan_text','price_header_title','price_interested_title','price_interested_desc','like_section_desc'
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
    public function getTitleSectionAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->title_section_en;
        } else if (App::isLocale('ar')) {
            return $this->title_section_ar;
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

    public function getWebBookerSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->web_booker_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->web_booker_section_desc_ar;
        }
    }

    public function getWebBookerSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->web_booker_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->web_booker_section_title_ar;
        }
    }


    public function getExternalSourcesSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->external_sources_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->external_sources_section_desc_en;
        }
    }

    public function getExternalSourcesSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->external_sources_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->external_sources_section_title_ar;
        }
    }
    
    public function getPassengerAppSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->external_sources_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->external_sources_section_title_ar;
        }
    }
    public function getPassengerAppSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->external_sources_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->external_sources_section_desc_ar;
        }
    }
  

    public function getTaxibutlerSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->taxibutler_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->taxibutler_section_title_ar;
        }
    }
    public function getTaxibutlerSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->taxibutler_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->taxibutler_section_desc_ar;
        }
    }
    public function getPlanSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->plan_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->plan_section_desc_ar;
        }
    }
    public function getPlanSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->plan_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->plan_section_title_ar;
        }
    }

    public function getPlanTextAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->plan_text_en;
        } else if (App::isLocale('ar')) {
            return $this->plan_text_ar;
        }
    }

  

    public function getPriceHeaderTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->price_header_title_en;
        } else if (App::isLocale('ar')) {
            return $this->price_header_title_ar;
        }
    }
    public function getPriceInterestedTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->price_interested_title_en;
        } else if (App::isLocale('ar')) {
            return $this->price_interested_title_ar;
        }
    }
    public function getPriceInterestedDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->price_interested_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->price_interested_desc_ar;
        }
    }
    public function getLikeSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->like_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->like_section_desc_ar;
        }
    }
}
