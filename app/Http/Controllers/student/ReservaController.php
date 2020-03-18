<?php

namespace App\Http\Controllers\student;
use App\Subject;
use App\Day;
use App\Reserve;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $subjects = DB::table('subjects')
            // ->join('reserves','reserves.subject_id','=','subjects.subject_id')
            ->get();
        // $stud_id = Auth::user()->stud_id;
        // $subjects = Subject::where('stud_id', $stud_id);
        return view('reserve.index',compact('subjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create_reserve_subject($id)
    {
        $subject = Subject::findOrFail($id);
        $day = Day::all();
        return view('reserve.create',compact('subject','day'));
       
    }

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
        $item = $request->all();
        $reserve = Reserve::create([
            'subject_id' => $item['subject_id'],
            'term' => $item['term'],
            'stud_id' => $item['stud_id']
            
        ]);
        return redirect('reserve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_subject_by_stud_id()
    {
    
        $reserves = DB::table('reserves')->where('stud_id', Auth::user()->stud_id )
        ->join('subjects', 'reserves.subject_id', '=', 'subjects.subject_id')
        ->get();
        return view('reserve.show',compact('reserves'));
    }

    public function show($id)
    {
       
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

    public function report()
    {
        $reserve = Reserve::all();
        return view('reserve.report',compact('reserve'));
    }
}
