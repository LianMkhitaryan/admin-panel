<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name', 'abbreviation', 'address', 'phone', 'email', 'website'];

    public function graduates()
    {
        return $this->belongsToMany(Graduate::class);
    }

    public function employers()
    {
        return $this->belongsToMany(Employer::class);
    }

    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'university_faculties', 'university_id', 'faculty_id');
    }

    public function specialities()
    {
        return $this->belongsToMany(Speciality::class, 'university_specialities', 'university_id', 'speciality_id');
    }
}
