<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mitra extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'mit_name',
        'pm_name',
        'hp_pm',
        'waspang_name',
        'hp_waspang'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function datasite()
    {
        return $this->hasMany(Datasite::class);
    }

}
