<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TimeLines;
class Structure extends Model
{
    use HasFactory;
  protected $fillable = [
      'name',
  ];

    public function period()
    {
        return $this->belongsToMany(TimeLines::class,'period_structures','periodId','structureId');
    }
}
