<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Support extends Model
{
    use HasFactory;

    protected $appends = [
        'header_title', 'header_desc','support_boxes_title','invite_title','invite_desc','rate_title','rate_desc','feedback_title','feedback_desc',
        'member_title','member_desc','donation_title','donation_desc','Join_title','Join_desc'

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

    

    public function getSupportBoxesTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->support_boxes_title_en;
        } else if (App::isLocale('ar')) {
            return $this->support_boxes_title_ar;
        }
    }
    
    public function getInviteTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->invite_title_en;
        } else if (App::isLocale('ar')) {
            return $this->invite_title_ar;
        }
    }

    

    public function getInviteDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->invite_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->invite_desc_ar;
        }
    }

    
    public function getRateTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->rate_title_en;
        } else if (App::isLocale('ar')) {
            return $this->rate_title_ar;
        }
    }
      
    public function getRateDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->rate_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->rate_desc_ar;
        }
    }
    

    public function getFeedbackTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->feedback_title_en;
        } else if (App::isLocale('ar')) {
            return $this->feedback_title_ar;
        }
    }

    public function getFeedbackDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->feedback_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->feedback_desc_ar;
        }
    }
    public function getMemberTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->member_title_en;
        } else if (App::isLocale('ar')) {
            return $this->member_title_ar;
        }
    }

    public function getMemberDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->member_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->member_desc_ar;
        }
    }

    
    public function getJoinTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->Join_title_en;
        } else if (App::isLocale('ar')) {
            return $this->Join_title_ar;
        }
    }

    public function getJoinDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->Join_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->Join_desc_ar;
        }
    }

    
    public function getDonationTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->donation_title_en;
        } else if (App::isLocale('ar')) {
            return $this->donation_title_ar;
        }
    }

    public function getDonationDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->donation_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->donation_desc_ar;
        }
    }
   
}
