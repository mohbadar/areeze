<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{

    public function  areeza(){
        return $this->hasMany(Areeza::class);
    }
    public function  shekayat(){
        return $this->hasMany(ShekayatForm::class);
    }
  /*  public function  guide(){
        return $this->hasMany(ShekayatGuide::class);
    }*/
}
