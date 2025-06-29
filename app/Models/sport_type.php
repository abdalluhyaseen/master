<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\SportType;

class sport_type extends Model
{
       use HasFactory, SoftDeletes;

    protected $fillable = ['sport_type', 'sport_image'];

    // Relationships
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
}
