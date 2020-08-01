<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $primaryKey = 'badge';

    public $table = 'employees';

    public $fillable = [
        'badge',
        'name',
        'designation',
        'nationality',
        'location',
        'unit_code',
        'remarks'
    ];
    
    public static $rules = [
        'badge' => 'required','unique:employee',
        'name' => 'required'
    ];

    public function checkin()
    {
        return $this->hasMany(CheckIn::class);
    }
   
    public function checkout()
    {
        return $this->hasMany(CheckOut::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
