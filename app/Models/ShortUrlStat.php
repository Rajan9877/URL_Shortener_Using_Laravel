<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortUrlStat extends Model
{
    use HasFactory;
    protected $fillable = [
        'visitor_ip', // Add 'long_url' to the fillable array
    ];
    // ShortUrlStat.php
public function urlShortener()
{
    return $this->belongsTo(UrlShortener::class);
}

}
