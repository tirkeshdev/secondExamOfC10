<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Category extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name',
    ];

    public function books():HasMany {
        return $this->hasMany(Book::class);
    }
    public $timestamps = false;

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
