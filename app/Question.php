<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function questionnaire(){
        return $this->belongsTo(Questionnaire::class);
        //return $this->belongsTo('App\User');
    }

    public function answers(){
        return $this->hasMany(Answer::class);
        //return $this->hasMany('App\Questionnaire');
    }

    public function responses(){
        return $this->hasMany(SurveyResponse::class);
        //return $this->hasMany('App\Questionnaire');
    }
}
