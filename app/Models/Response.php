<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = ['data'];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}