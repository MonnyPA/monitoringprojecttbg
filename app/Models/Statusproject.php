<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statusproject extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'status_name',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function detailstatus()
    {
        return $this->hasMany(Detailstatus::class);
    }
}
