<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EjrayaSader extends Model
{
    public function areeza()
    {
        return $this->belongsTo(Areeza::class);
    }

    public function ministry()
    {
        return $this->belongsTo(Ministry::class);
    }
}
