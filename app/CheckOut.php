<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckOut extends Model
{
    public function employees()
    {
        return $this->belongsTo(Employee::class, 'emp_id')->withDefault();
    }

    public function assets()
    {
        return $this->belongsTo(Asset::class, 'asset_id')->withDefault();
    }

    protected $dates = ['date_issued'];

    public $fillable = [
        'emp_id',
        'asset_id',
        'status',
        'remarks',
        'notes',
        'date_issued',
        'badge',
        'name',
        'user'
    ];
    
}
