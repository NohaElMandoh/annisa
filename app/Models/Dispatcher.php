<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Dispatcher extends Model
{
    use HasFactory;

    protected $appends = [
        'header_title', 'header_desc','title_section','fleet_section_title','fleet_section_desc',
        'messaging_section_title','messaging_section_desc', 'trace_section_title', 'trace_section_desc',
        'job_section_title', 'job_section_desc','dispatching_section_title','dispatching_section_desc',
        'administration_section_title','administration_section_desc','driver_app_section_title','driver_app_section_desc',
        'booking_solution_section_title','booking_solution_section_desc'
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
    public function getFleetSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->fleet_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->fleet_section_title_ar;
        }
    }
    
    public function getFleetSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->fleet_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->fleet_section_desc_ar;
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
    public function getjobSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->job_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->job_section_title_ar;
        }
    }
    public function getjobSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->job_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->job_section_desc_ar;
        }
    }

    public function getDispatchingSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->dispatching_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->dispatching_section_title_ar;
        }
    }
    public function getDispatchingSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->dispatching_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->dispatching_section_desc_ar;
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

    
    public function getBookingSolutionSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->booking_solution_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->booking_solution_section_title_ar;
        }
    }
    public function getBookingSolutionSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->booking_solution_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->booking_solution_section_desc_ar;
        }
    }
}
