<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ContactU extends Model
{
    use HasFactory;
    protected $table='contact_us';

    protected $appends = ['header_title','header_desc','d_app_questions_title','d_app_questions_desc','cloud_questions_title'
,'cloud_questions_desc','chamber_commerce','office'];
    
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

    public function getDAppQuestionsTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->d_app_questions_title_en;
        } else if (App::isLocale('ar')) {
            return $this->d_app_questions_title_ar;
        }
    }
    public function getCloudQuestionsDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->cloud_questions_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->cloud_questions_desc_ar;
        }
    }
    public function getCloudQuestionsTitleAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->cloud_questions_title_en;
        } else if (App::isLocale('ar')) {
            return $this->cloud_questions_title_ar;
        }
    }
    public function getDAppQuestionsDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->d_app_questions_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->d_app_questions_desc_ar;
        }
    }

    public function getChamberCommerceAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->chamber_commerce_en;
        } else if (App::isLocale('ar')) {
            return $this->chamber_commerce_ar;
        }
    }
    public function getOfficeAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->office_en;
        } else if (App::isLocale('ar')) {
            return $this->office_ar;
        }
    }
}
