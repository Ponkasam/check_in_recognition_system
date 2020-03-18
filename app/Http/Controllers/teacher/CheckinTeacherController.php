<?php

namespace App\Http\Controllers\teacher;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Chackin;
use App\Subject;
use App\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class CheckinTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ss = Chackin::all();
        $keyword = $request->get('search');
        if (!empty($keyword)) {
            $ss = Chackin::where('week','==',"%$keyword%");
        } else {
            $ss = Chackin::latest();
        }
        // $checkins = Chackin::all();
        $checkins = DB::table('chackins')
        ->join('subjects','chackins.subject_id','=','subjects.subject_id')
        ->join('users','chackins.stud_id','=','users.stud_id')
        ->orderby('chackins.week')
        // ->Orwhere("subjects.teacher", '=','like','%', Auth::user()->f_name,'%')
        ->groupby('users.stud_id','chackins.week')
        //->select('subjects.* , users.* , chackins.*')
        ->select('subjects.*' , 'users.*' , 'chackins.*')
        ->get();

        // dd($checkins);
        return view('teacher.checkinStudent.index',compact('checkins'));
    }
    public function report(){
                // $checkins = Chackin::all();
                $checkins = DB::table('chackins')
                ->join('subjects','chackins.subject_id','=','subjects.subject_id')
                ->join('users','chackins.stud_id','=','users.stud_id')
                // ->Orwhere("subjects.teacher", '=','like','%', Auth::user()->f_name,'%')
                ->get();
                // dd($checkins);
                return view('teacher.checkinStudent.report',compact('checkins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
