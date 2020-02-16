<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShekayatForm extends Model
{
    protected $table='shekayatforms';
    public function priority(){
        return $this->belongsTo(Priority::class);
    }

    public function ministry(){
        return $this->belongsTo(Ministry::class);
    }

    public function related(){
        return $this->belongsTo(Related::class);
    }

    public function educationalLevel(){
        return $this->belongsTo(EducationLevel::class);
    }

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function province(){
        return $this->belongsTo(Province::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function chairmanship(){
        return $this->belongsTo(Chairmanship::class);
    }

    public function contactType(){
        return $this->belongsTo(ContactType::class);
    }
    public function confirm()
    {
        return $this->hasone(Confirm::class);
    }
    public function guides(){
        return $this->hasMany(ShekayatGuide::class);
    }
}
