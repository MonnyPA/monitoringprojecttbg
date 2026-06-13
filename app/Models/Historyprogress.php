<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Historyprogress extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'datasite_id',
        'detail'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function datasite()
    {
        return $this->belongsTo(Datasite::class);
    }
}
