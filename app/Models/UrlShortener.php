<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlShortener extends Model
{
    use HasFactory;
    protected $fillable = [
        'long_url', // Add 'long_url' to the fillable array
        'short_code',
    ];
    public function stats()
    {
        return $this->hasMany(ShortUrlStat::class);
    }
}
