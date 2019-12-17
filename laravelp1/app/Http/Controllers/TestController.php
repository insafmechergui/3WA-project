<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
    public function showInscription(){   
		return view('accueil');

    }

    public function handleInscription(){
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
            

    	User::create([
			'name'=>$data['name'],
			'email'=>$data['mail'],
			'phone'=>$data['tel'],
            'photo'=>$photo,
            'password'=>bcrypt($data['pass'])
	    ]);

	   	return view('accueil');

	}	

	public function showConnexion(){
    	
		return view('accueil');
    		
	}

	public function handleConnexion(){
    	 $data= Input::all();

    	 User::create([
    	 	'email'=>$data['mail'],
    	 	'password'=>$data['pass']
    	]);

    	return back();
	}

    public function showAnnonce(){   
		return view('annonce');

    }

    public function handleAnnonce(){
    	$data= Input::all();
    	$photo=str_random(10).'.'.$data['image']->getClientOriginalExtension();
		$image_Path=public_Path('storage/'.$photo);
		
		Image::make($data['image']->getRealPath())->crop(500,500)->insert(public_Path('../../../public/assets/images/logo.png'))->save($image_Path);

    	$cred=User::create([
			'titre'=>$data['titre'],
			'photo'=>$photo,
			'prix'=>$data['prix'],
			'category'=>$data['category'],
			'description'=>$data['desc'],
			'address'=>$data['addresse'],
			'telephone'=>$data['tel'],
			'type'=>$data['type']
	    ]);
		
		return view('annonce');
   	}

}
