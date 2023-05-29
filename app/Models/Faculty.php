<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function universities()
    {
        return $this->belongsToMany(University::class, 'university_faculties', 'faculty_id', 'university_id');
    }
}
