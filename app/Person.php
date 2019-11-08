<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;
    //
    protected  $fillable = [
        'name','original_name', 'birthday','job_id','image',
    ];
    public function job(){
        return $this->belongsTo('App\Job','job_id');
    }
}
