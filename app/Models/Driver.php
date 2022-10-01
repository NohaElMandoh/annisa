<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Driver extends Model
{
    use HasFactory;
    protected $appends = [
        'header_title', 'page_title', 'header_desc', 'driver_app_section_title', 'driver_app_section_desc',
        'messaging_section_title', 'messaging_section_desc', 'signup_section_title', 'signup_section_desc', 'network_section_title', 'network_section_desc',
        'trace_section_title', 'trace_section_desc', 'interested_section_desc', 'interested_section_title',
        'agreement_section_title', 'agreement_section_desc', 'agreement_section_name', 'agreement_section_position'
    ];


    public function getHeaderTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->header_title_en;
        } else if (App::isLocale('ar')) {
            return $this->header_title_ar;
        }
    }
    public function getPageTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->page_title_en;
        } else if (App::isLocale('ar')) {
            return $this->page_title_ar;
        }
    }
    public function getHeaderDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->header_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->header_desc_en;
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

    public function getMessagingSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->messaging_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->messaging_section_title_ar;
        }
    }
    public function getMessagingSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->messaging_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->messaging_section_desc_ar;
        }
    }
    public function getSignupSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->signup_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->signup_section_title_ar;
        }
    }
    public function getSignupSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->signup_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->signup_section_desc_ar;
        }
    }
    public function getNetworkSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->network_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->network_section_desc_ar;
        }
    }
    public function getNetworkSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->network_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->network_section_title_ar;
        }
    }

    public function getTraceSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->trace_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->trace_section_title_ar;
        }
    }
    public function getTraceSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->trace_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->trace_section_desc_ar;
        }
    }
    public function getInterestedSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->interested_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->interested_section_desc_ar;
        }
    }
    public function getInterestedSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->interested_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->interested_section_title_ar;
        }
    }
    public function getAgreementSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->agreement_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->agreement_section_title_ar;
        }
    }
    public function getAgreementSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->agreement_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->agreement_section_desc_ar;
        }
    }
    public function getAgreementSectionNameAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->agreement_section_name_en;
        } else if (App::isLocale('ar')) {
            return $this->agreement_section_name_ar;
        }
    }
    public function getAgreementSectionPositionAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->agreement_section_position_en;
        } else if (App::isLocale('ar')) {
            return $this->agreement_section_position_ar;
        }
    }
}
