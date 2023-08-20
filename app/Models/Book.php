<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Book extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];


    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }

    public function publisher(): BelongsTo {
        return $this->belongsTo(Publisher::class);
    }


    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'book_languages');
    }

    public $timestamps = false;


}
