<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['name', 'description', 'requirements', 'salary', 'contact_info'];

    public function response()
    {
        return $this->hasMany(Response::class);
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
