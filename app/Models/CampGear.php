<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampGear extends Model
{
    /**
     * The table associated with the model.
     */
    protected $table = 'camp_gears';

    /**
     * Indicates if the model should be timestamped.
     * Disabled because the camp_gears table has no created_at/updated_at columns.
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'category',
        'rent_price',
        'stock',
        'image',
        'description',
    ];
}
