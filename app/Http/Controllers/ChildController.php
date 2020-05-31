<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =  Auth::user();
        $children = [];
        if($user->rol == 'T'){
           $children =  DB::table('child')->where('users_tutor_id', $user->id)->get(); 
        }
        else if($user->rol == 'P') {
            $children =  DB::table('child')->where('users_professor_id',  $user->id)->get();
        }
        else{
            $children = DB::table('child')->get();
        }
        return view('children.index', compact('children'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('children.newChild', ['professores' => User::where('rol', 'P')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'lastname' => 'required',
            'dateBorn' => 'required|date',
            'TutorID' => 'required',
            'teacherID' => 'nullable'
        ], [
            'name.required' => 'El nombre es requerido'
        ])->validate();
        if($request->user()->rol == 'P'){
            DB::table('child')->insert([
                'name' => $request->name,
                'lastName' => $request->lastname,
                'dateBorn' =>  $request->dateBorn,
                'users_tutor_id' => $request->TutorID,
                'users_professor_id' => $request->teacherId
            ]);
        }
        
        return redirect('home');
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
        $profesores = User::where('rol', 'P')->get();
        $child = DB::table('child')->find(4);
        return view('children.editChild' , compact('profesores', 'child') );
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'lastname' => 'required',
            'dateBorn' => 'required|date',
            'TutorID' => 'required',
            'teacherID' => 'nullable'
        ], [
            'name.required' => 'El nombre es requerido'
        ])->validate();

        $child = DB::table('child')->find(4);
        
        DB::table('child')->where('id',$id)->update([
            'name' => $request->name,
            'lastName' => $request->lastname,
            'dateBorn' =>  $request->dateBorn,
            'users_tutor_id' => $request->TutorID,
            'users_professor_id' => $request->teacherId 
        ]);

        return redirect('children');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child = DB::table('child')->where('id', $id)->delete();

        return redirect('children')->with('success', 'El elemento fue eliminado');
    }
}
