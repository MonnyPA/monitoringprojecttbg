<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detailstatus extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'statusproject_id',
        'detail'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function statusproject()
    {
        return $this->belongsTo(Statusproject::class);
    }
}
