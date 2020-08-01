<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    public function employees()
    {
        return $this->belongsTo(Employee::class, 'badge')->withDefault();
    }

    public function assets()
    {
        return $this->belongsTo(Asset::class, 'asset_id')->withDefault();
    }
}
