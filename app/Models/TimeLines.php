<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Structure;
class TimeLines extends Model
{
    use HasFactory;

    public function structure()
    {
        return $this->belongsToMany(Structure::class,'period_structures','periodId','structureId')->withPivot('total');;
    }
}
