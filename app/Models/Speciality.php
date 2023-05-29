<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'university_specialities', 'speciality_id', 'university_id');
    }
}
