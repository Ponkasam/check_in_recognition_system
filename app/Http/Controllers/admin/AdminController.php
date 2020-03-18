<?php

namespace App\Http\Controllers\admin;

use App\User;
use App\Status;
use Auth;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        return view('admin.create',compact('status'));
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
        $user = User::create([
            'stud_id' => $item['stud_id'],
            'f_name' => $item['f_name'],
            'l_name' => $item['l_name'],
            'birth_day' => $item['birth_day'],
            'username' => $item['username'],
            'password' => Hash::make($item['password']),
            'status_id' => $item['status_id']
        ]);
        return redirect('admin/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $status = Status::all();
        return view('admin.edit',compact('user', 'status'));
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
        $user = User::findOrFail($id)->update($item);
        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect('admin');
    }

    public function listprofile(){
        $users = User::all();
        return view('admin.list',compact('users'));
    }
    public function listreport(){
        $users = User::all();
        return view('admin.report',compact('users'));
    }
  
}
