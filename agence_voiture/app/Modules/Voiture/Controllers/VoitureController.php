<?php

namespace App\Modules\Voiture\Controllers;

use App\Modules\Voiture\Models\Reservation;
use Illuminate\Support\Facades\Validator;
use App\Modules\Voiture\Models\Voiture;
use Intervention\Image\Facades\Image;
use App\Modules\Voiture\Models\Media;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Modules\Voiture\Models\Type;
use Illuminate\Support\Facades\Auth;
use App\Modules\Voiture\Models\Etat;
use Illuminate\Http\Request;


class VoitureController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Voiture::index");
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

    public function contact()
    {
        //
        return view('Voiture::contact');
        
    }

    public function showcontent()
    {
        //
        $type=Type::all();
        $etat=Etat::all();
        return view('Voiture::content',[
            'type'=>$type,
            'etats'=>$etat,
        ]);
        
    }

     public function handlecontent()
    {
        //model

        $data=Input::all();
      

       $voiture = Voiture::create([
            'model'=>$data['model'],
            'marque'=>$data['marque'],
            'prix'=>$data['prix'],
            'color'=>$data['coleur'],
            'nb_place'=>$data['place'],
            'nb_porte'=>$data['porte'],
            'puissance'=>$data['puissance'],
            'etat_id'=>$data['etat'],
            'type_id'=>$data['type']

        ]);

    $cont=$voiture->id;

       if($data['photo']){
            foreach($data['photo'] as $image){

                $photo=str_random(10).'.'.$image->getClientOriginalExtension();
                $image_Path=public_Path('storage/'.$photo);
                
                Image::make($image->getRealPath())->resize(500,500)->save($image_Path);
                
                $cred=Media::create([
                    
                    'url'=>$photo,
                    'voiture_id'=>$cont

                ]);
            }
        }

        return view('User::accueil')->with('status','annonce ajouté avec success');
        
    }

   

    public function showliste()
    {
        //
      $type = Type::all();
        return view('Voiture::liste',compact('type'));
        
    }
    
    public function showType($id)
    {
        //
        $type = Type::all();
        $media=Media::all();
        $voiture = Voiture::all()->where('type_id',$id);
      
      return view('Voiture::partype',compact('type','voiture','media'));
        
    } 
    

     public function showReservation($id)
    {
        $voiture=Voiture::find($id);
        $reservation = Reservation::all();
        return view('Voiture::reserver',compact('voiture','reservation'));

    }

    public function handleReservation()
    {
        //
        $data=Input::all();
        $user=Auth::user()->id;
        $voiture= Reservation::create([
            'date_location'=>$data['date_locat']." ".$data['time_locat'],
            'date_retour'=>$data['date_ret']." ".$data['time_ret'],
            'voiture_id'=>$data['id'],
            'user_id'=>$user,
        ]);

        return back();
        
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
