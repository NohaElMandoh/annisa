<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class PassengersAppsBudget extends Model
{
    use HasFactory;
    protected $appends = ['desc','plan_desc'];
    
  
    public function getDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->desc_en;
        } else if (App::isLocale('ar')) {
            return $this->desc_ar;
        }
    }

    public function getPlanDescAttribute($value)
    {
        if (App::isLocale('en')) {
            return $this->plan_desc_en;
        } else if (App::isLocale('ar')) {
            return $this->plan_desc_ar;
        }
    }
}
