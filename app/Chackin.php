<?php

namespace App;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Chackin extends Model
{
    protected $table = 'chackins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'stud_id','subject_name','status','subject_id','week'
    ];
    public function Subject(){
        return $this->belongsTo('App\Subject','subject_id');
    }
    public static function select_all()
      {
        $stud_id = Auth::user()->stud_id;
        $sql = "SELECT * FROM chackins
                INNER JOIN subjects ON chackins.subject_id = subjects.subject_id
                
                WHERE chackins.stud_id = {$stud_id}
        ";
        return DB::select($sql , []);
      } 
      public static function checkinTeacher()
      {
        
        $sql = "SELECT DISTINCT chackins.week,chackins.id,chackins.stud_id,users.f_name,users.l_name,chackins.subject_id,subjects.subject_name,chackins.status_check,chackins.created_at FROM chackins
                INNER JOIN subjects ON chackins.subject_id = subjects.subject_id
                INNER JOIN users ON chackins.stud_id = users.stud_id
                ORDER BY chackins.week
                
        ";
        return DB::select($sql , []);
      } 
}
