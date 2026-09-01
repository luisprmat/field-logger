<?php

namespace App\Models;

use Database\Factories\MeterFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['code', 'name', 'location_lat', 'location_lng', 'unit'])]
class Meter extends Model
{
    /** @use HasFactory<MeterFactory> */
    use HasFactory;

    public function readings(): HasMany
    {
        return $this->hasMany(Reading::class);
    }
}
