<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['name', 'description', 'address', 'phone', 'email'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function universities()
    {
        return $this->belongsToMany(University::class);
    }
}