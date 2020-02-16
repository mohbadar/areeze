<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areeza extends Model
{
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

    public function karshenasiResponse(){
        return $this->hasOne(KarshenasiResponse::class);
    }

    public function ejrayaHefz(){
        return $this->hasOne(EjrayaHefz::class);
    }

    public function ejrayaSader(){
        return $this->hasOne(EjrayaSader::class);
    }
    public function guides(){
        return $this->hasMany(AreezaGuide::class);
    }
}
