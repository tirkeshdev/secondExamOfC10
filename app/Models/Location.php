<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    protected  $guarded = [
        'id',
    ];

    protected $fillable = [
        'name'
    ];

    public function customers():HasMany {
        return $this->hasMany(Customer::class);
    }

    public $timestamps = false;
}
