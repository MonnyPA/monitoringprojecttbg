<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Datasite extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'site_id',
        'site_name',
        'long',
        'lat',
        'kabupaten',
        'mitra_id',
        'statusproject_id',
        'catatan',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function statusproject()
    {
        return $this->belongsTo(Statusproject::class);
    }

    public function historyprogresses()
    {
        return $this->hasMany(Historyprogress::class);
    }
}
