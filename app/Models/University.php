<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name', 'abbreviation', 'address', 'phone', 'email', 'website', 'faculties', 'specialities'];

    public function graduates()
    {
        return $this->belongsToMany(Graduate::class);
    }

    public function employers()
    {
        return $this->belongsToMany(Employer::class);
    }
}
