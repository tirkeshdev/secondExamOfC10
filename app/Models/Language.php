<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $guarded = [
        'id',
    ];

    public function getName()
    {
        $locale = app()->getLocale();
        if ($locale == 'en') {
            return $this->name;
        } elseif ($locale == 'tm') {
            return $this->name_tm ?: $this->name;
        } elseif ($locale == 'ru') {
            return $this->name_ru ?: $this->name;
        } else {
            return $this->name;
        }
    }
}
