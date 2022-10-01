<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class WebPortal extends Model
{
    use HasFactory;
    protected $appends = ['header_title','header_desc','web_portal_section_title','web_portal_section_desc',
    'dispatch_section_desc','dispatch_section_title', 'trace_section_desc','trace_section_title',
    'administration_section_desc','administration_section_title','groups_section_desc','groups_section_title',
    'plan_section_title','plan_section_desc','plan_text'];
   
  
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

    
    public function getWebPortalSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->web_portal_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->web_portal_section_title_ar;
        }
    }

    public function getWebPortalSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->web_portal_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->web_portal_section_desc_ar;
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

    public function getAdministrationSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->administration_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->administration_section_title_ar;
        }
    }

    public function getAdministrationSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->administration_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->administration_section_desc_ar;
        }
    }
    public function getGroupsSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->groups_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->groups_section_title_ar;
        }
    }

    public function getGroupsSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->groups_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->groups_section_desc_ar;
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
