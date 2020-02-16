<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShekayatGuide extends Model
{
    public function shekayat(){
        return $this->belongsTo(ShekayatForm::class);
    }

}
