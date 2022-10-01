<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Carrer extends Model
{
    use HasFactory;

    protected $appends = [
        'header_title', 'header_desc','opportunity_section_title','opportunity_section_desc','end_section_title','end_section_desc'
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
    public function getOpportunitySectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->opportunity_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->opportunity_section_title_ar;
        }
    }
    public function getOpportunitySectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->opportunity_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->opportunity_section_desc_ar;
        }
    }
    public function getEndSectionTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->end_section_title_en;
        } else if (App::isLocale('ar')) {
            return $this->end_section_title_ar;
        }
    }
    public function getEndSectionDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->end_section_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->end_section_desc_ar;
        }
    }
}
