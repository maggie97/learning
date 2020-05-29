<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DB::table('child')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('children.newChild');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Validator::make($request->all(),[
            'Name' => 'required|unique:posts|max:255',
            'Lastname' => 'required',
            'dateBorn' => 'required|date',
            'user_tutor_id' => 'required',
            'teacherID' => 'nullable'
        ])->validate(); */
       /*  if($request->user()->rol == 'P'){
            DB::table('child')->insert([
                'name' => $request->Name,
                'lastName' => $request->Lastname,
                'dateBorn' =>  $request->dateBorn,
                'users_tutor_id' => $request->TutorID,
            ]);
        } */
        return $request->input('Lastname');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =  Auth::user();
        // DB::table('child')->join('users', 'users.id', '=', 'child.users_tutor_id')->get();
        if($user->rol == 'P'){
           return  DB::table('child')->join('users', 'users.id', '=', 'child.users_tutor_id')->get(); 
        }
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
