<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}