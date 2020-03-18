<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Reserve extends Model
{
    protected $table = 'reserves';
    protected $primaryKey = 'id';
    protected $fillable = [
        'subject_id','term','YML','stud_id','status_re'
    ];

    public function Subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }
    public function User(){
        return $this->belongsTo('App\Subject','subject_id');
    } 
}
