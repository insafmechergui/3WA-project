<?php

namespace App\Modules\User\Controllers;

use App\Modules\Annonce\Models\Categorie;
use App\Modules\Annonce\Models\Annonce;
use App\Modules\Annonce\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Modules\User\Models\Contact;
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
    public function showHome()
    {
        //
        $cat=Categorie::all();
        
        $ann=Annonce::orderBy('created_at', 'desc')->where('status',1)->get();
       
        $user=User::all();
           

        return view('User::home',[
            'category'=>$cat,
            'annonce'=>$ann,
            'user'=>$user,
        ]);
    }

    public function showProfil()
    {
        //
        $user=User::all();

        return view('User::profil',[
            'user'=>$user
        ]);
    }

    public function afficherProfil($id)
    {
        $user=User::find($id);
        $cat=Categorie::all();
        $ann=Annonce::all()->where('user_id',$id);

        return view('User::profil',[
            'user'=>$user,
            'category'=>$cat,
            'annonce'=>$ann
        ]);
    }

    public function showAgent()
    {
        //
        $user=User::all();
        $cont=Contact::all();
        
        return view('User::agent',[
            'user'=>$user,
            'cont'=>$cont
        ]);
    }

    public function updateProfil()
    {
        //
        $user=User::all();
        return view('User::agent',[
            'user'=>$user
        ]);
    }


    public function handleUpdateProfil($id){
        
        $data= Input::all();

        if(!empty($data['photo']))
            {       
             $photo=str_random(10).'.'.$data['photo']->getClientOriginalExtension();
             $image_Path=public_Path('storage/'.$photo);

                    Image::make($data['photo']->getRealPath())->crop(250,250)->save($image_Path);

            }
        else 
            {
                $photo = NULL;
            }
        
        $us=User::where('id',$id)->update([
            'name'=>$data['nom'],
            'phone'=>$data['tel'],
            'photo'=>$photo,
            'email'=>$data['mail']
        ]);


        return back();
    }
    

    public function showInscription(){   
        return view('User::home');

    }

    public function handleInscription(){
        $data= Input::all();
        
             
            $photo=str_random(10).'.'.$data['photo']->getClientOriginalExtension();
            $image_Path=public_Path('storage/'.$photo);
                    
            Image::make($data['photo']->getRealPath())->save($image_Path);

             
        User::create([
            'name'=>$data['name'],
            'email'=>$data['mail'],
            'phone'=>$data['tel'],
            'password'=>bcrypt($data['pass']),
            'photo'=>$photo,
        ]);

        return back()->with('status','Inscription terminée');

    }   

    public function showConnexion(){
        $user=User::all();
        return view('User::home',[
            'user'=>$user
        ]);
            
    }

    public function handleConnexion(){
         $data= Input::all();

         $cred=[
            'email'=>$data['mail'],
            'password'=>$data['pass']
        ];
        if(Auth::attempt($cred)){
            Auth::user();
            return back();

        }else{

            return back()->with('status','verifier les champs');
        }

    }

    public function handleLogOut(){
        Auth::logout();
        return back();
    }


    public function showContact(){ 
        return view('User::contact');

    }

    public function handleContact(){
        $data= Input::all();
        
        Contact::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'titre'=>$data['titre'],
            'content'=>$data['message']
        ]);

        return back();

    }


    public function showCategory($id)
    {
        //
        $cat=Annonce::where('category_id',$id)->get();
  
        return view('Annonce::parcategory',[
            'category'=>$cat
            
        ]);
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
