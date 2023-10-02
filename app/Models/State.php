<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    const ACTIVE = 1, INACTIVE = 2;

    protected $fillable = [
        'code', 'name', 'status', 'country_id'
    ];

    public function country()
    {
        return $this->belongsTo(State::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::ACTIVE);
    }
}
