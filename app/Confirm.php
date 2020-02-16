<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{

    protected $table='confirm';
    protected $fillable=['des_date','description','status_id'];

    public function Shekayatform()
    {
        return $this->belongsTo(ShekayatForm::class);
    }

    public function status() {
        return $this->belongsTo(Status::class);
    }
}
