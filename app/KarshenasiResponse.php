<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KarshenasiResponse extends Model
{
    public function areeza()
    {
        return $this->belongsTo(Areeza::class);
    }
}
