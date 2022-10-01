<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class WebBooker extends Model
{
    use HasFactory;
    protected $appends = [
        'header_title', 'header_desc','title_section','client_booking_section_title','client_booking_section_desc',
        'setup_section_title','setup_section_desc','assignment_section_title','assignment_section_desc','payments_section_title'
        ,'payments_section_desc', 'plan_section_title','plan_section_desc','plan_text'
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

  
    public function getClientBookingSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->client_booking_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->client_booking_section_title_ar;
        }
    }
    public function getClientBookingSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->client_booking_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->client_booking_section_desc_ar;
        }
    }

    
    public function getSetupSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->setup_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->setup_section_title_ar;
        }
    }
    public function getSetupSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->setup_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->setup_section_desc_ar;
        }
    }


    public function getAssignmentSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->assignment_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->assignment_section_title_ar;
        }
    }
    public function getAssignmentSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->assignment_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->assignment_section_desc_ar;
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
}
