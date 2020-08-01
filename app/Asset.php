<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    public function checkin()
    {
        return $this->hasMany(CheckIn::class);
    }
   
    public function checkout()
    {
        return $this->hasMany(CheckOut::class);
    }

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'emp_id')->withDefault();
    }



}
