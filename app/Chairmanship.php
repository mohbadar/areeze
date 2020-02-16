<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chairmanship extends Model
{
    public function  areeza(){
        return $this->hasMany(Areeza::class);
    }
    public function  Shekayat(){
        return $this->hasMany(ShekayatForm::class);
    }
}
