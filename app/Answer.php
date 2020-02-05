<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded = [];

    public function question(){
        return $this->belongsTo(Question::class);
        //return $this->belongsTo('App\User');
    }

    public function responses(){
        return $this->hasMany(SurveyResponse::class);
        //return $this->belongsTo('App\User');
    }
}
