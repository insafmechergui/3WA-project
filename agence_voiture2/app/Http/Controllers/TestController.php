<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Voiture;
use App\Media;
use App\Type;
use App\Etat;

class TestController extends Controller
{
    //
    public function showAccueil(){
        return view ('accueil');
    }
    
    public function showContent()
    {
        //
        $type=Type::all();
        $etats=Etat::all();
        return view('content',compact('type','etats'));
        
    }

     public function handleContent()
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
            'boite_vitesse'=>$data['boite_vitesse'],
            'consommation'=>$data['consommation'],
            'etat_id'=>$data['etat'],
            'type_id'=>$data['type']

         ]);

    $voit=$voiture->id;

       if($data['photo']){
            foreach($data['photo'] as $image){

                $photo=str_random(10).'.'.$image->getClientOriginalExtension();
                $image_Path=public_Path('storage/'.$photo);
                
                Image::make($image->getRealPath())->resize(500,500)->save($image_Path);
                
                $cred=Media::create([
                    
                    'url'=>$photo,
                    'voiture_id'=>$voit

                ]);
            }
        }

        return back()->with('status','Nouvel Voiture ajoutée');
        
    }
    
    
    public function showVoiture()
    {
        //
      $type = Voiture::all();
    
        return view('voiture',compact('type'));
        
    }


    
}
