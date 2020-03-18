<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
class Subject extends Model
{
    protected $table = 'subjects';
    protected $primaryKey ='id';
    protected $fillable = [
        'subject_id', 'subject_name', 'class_room', 'subject_time', 'term', 'sect', 'teacher', 'day_id'
    ];

    public function days(){
        return $this->belongsTo('App\Day','day_id');
    }
    public function reserve(){
        return $this->hasOne('App\Reserve','subject_id');
    }
    public function Chackin(){
        return $this->hasOne('App\Chackin','subject_id');
    }
}
