<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function shekayatdescription()
    {
        return $this->hasMany(ShekayatForm::class);
    }

    public function confirm()
    {
        return $this->hasMany(Confirm::class);
    }
}
