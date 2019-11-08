<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    //
    protected  $fillable = [
        'title','description','imdb','image','year', 'releaseDate', 'revisted_at','type_id','category_id','language_id','country_id','diretor_id','star1_id', 'star2_id','star3_id', 'author_id'
    ];
    public function type(){
        return $this->belongsTo('App\Type','type_id');
    }
    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    public function language(){
        return $this->belongsTo('App\Language','language_id');
    }
    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }
    public function diretor(){
        return $this->belongsTo('App\Person','diretor_id');
    }
    public function star1(){
        return $this->belongsTo('App\Person','star1_id');
    }
    public function star2(){
        return $this->belongsTo('App\Person','star2_id');
    }
    public function star3(){
        return $this->belongsTo('App\Person','star3_id');
    }
    public function author(){
        return $this->belongsTo('App\Person','author_id');
    }
}
