<?php

namespace App\Modules\User\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("User::index");
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

    public function showInscription(){

        return view('User::accueil');
    }

    public function handleInscription(){
        
        $data=Input::all();
        User::create([
            'name'=>$data['nom'],
            'email'=>$data['mail'],
            'password'=>bcrypt($data['pass']),
            'role_id'=>'3',
        ]);

        return view('User::accueil');
    }



    public function showConnexion(){
        return view('User::accueil');
    }
    
    public function handleConnexion(){

        $data=Input::all();
        $conn=[
            'email'=>$data['mail'],
            'password'=>$data['pass'],
        ];

        if(Auth::attempt($conn)){
            Auth::user();
            return back();

        }else{

            return back()->with('status','verifier les champs');
        }
        
        return view('User::accueil');
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
