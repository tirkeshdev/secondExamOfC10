<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Order extends Model
{
    protected $fillable = [
        'id'
    ];

    protected $casts = [
        'created-at' => 'datetime',
    ];

    const UPDATED_AT = null;

    public function customer(): BelongsTo {
        return $this->belongsTo(Customer::class);
    }

}
