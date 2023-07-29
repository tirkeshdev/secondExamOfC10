<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function location(): BelongsTo {
        return $this->belongsTo(Location::class);
    }

    public function orders():HasMany {
        return $this->hasMany(Order::class);
    }

    public $timestamps = false;


}
