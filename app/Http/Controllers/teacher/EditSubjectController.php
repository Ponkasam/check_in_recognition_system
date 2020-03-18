<?php

namespace App\Http\Controllers\teacher;

use App\Subject;
use App\Day;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('edit.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $day = Day::all();
        return view('edit.create',compact('day'));
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
        $subject = Subject::create([
            'subject_id' => $item['subject_id'],
            'subject_name' => $item['subject_name'],
            'class_room' => $item['class_room'],
            'subject_time' => $item['subject_time'],
            'term' => $item['term'],
            'sect' => $item['sect'],
            'teacher' => $item['teacher'],
            'day_id' => $item['day_id']
        ]);
        return redirect('edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subject = Subject::findOrFail($id);
        return view('edit.show',compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        $day = Day::all();
        return view('edit.edit',compact('subject','day'));

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
        $item = $request->all();
        $subject = Subject::findOrFail($id)->update($item);
        return redirect('edit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect('edit');
    }
}
