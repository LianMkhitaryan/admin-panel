<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    protected $fillable = ['full_name', 'date', 'address', 'phone', 'email'];

    public function universities()
    {
        return $this->belongsToMany(University::class);
    }

    public function resume()
    {
        return $this->hasOne(Resume::class);
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }
}
