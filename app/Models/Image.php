<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Image extends Model
{
    protected $fillable = [
        'uuid'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($image) {
            $image->uuid = Uuid::uuid4()->toString();
        });
    }
}
