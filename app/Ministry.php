<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    public function  areeza(){
        return $this->hasMany(Areeza::class);
    }

    public function  ejrayaHefz(){
        return $this->hasMany(EjrayaHefz::class);
    }

    public function  ejrayaSader(){
        return $this->hasMany(EjrayaSader::class);
    }
    public function  shekayat(){
        return $this->hasMany(ShekayatForm::class);
    }
}
