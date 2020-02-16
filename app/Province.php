<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function  areeza(){
        return $this->hasMany(Areeza::class);
    }
    public function  shekayat(){
        return $this->hasMany(ShekayatForm::class);
    }
    public function district()
    {
        return $this->hasMany(District::class);
    }
}
