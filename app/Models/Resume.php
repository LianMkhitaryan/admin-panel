<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['experience', 'skills', 'education', 'courses'];

    public function graduate()
    {
        return $this->belongsTo(Graduate::class);
    }

    public function response()
    {
        return $this->hasOne(Response::class);
    }
}
