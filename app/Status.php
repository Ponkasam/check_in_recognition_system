<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'statuses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status_name','status_id'
    ];

    public function users() {
        return $this->belongsTo('App\User','status_id');
    }
}
