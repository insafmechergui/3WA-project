<?php

namespace App\Modules\Annonce\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Modules\Annonce\Models\Categorie;
use App\Modules\Annonce\Models\Annonce;
use App\Modules\Annonce\Models\Media;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Modules\User\Models\User;
use Illuminate\Http\Request;


class AnnonceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("Annonce::index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showHomeAnnonce()
    {
        //
        $cat=Categorie::all();

        return view('Annonce::annonce',[
            'category'=>$cat

        ]);
    }
public function showRecherche(){
    return view('Annonce::recherche');
}    

   public function recherche(Request $request)
{
       $q=Input::get('titre');
       if($q != ' '){
           $ann = Annonce::where('titre', 'LIKE', '%'. $q. '%')
               ->orWhere('etat', 'LIKE', '%'. $q. '%')
               ->orWhere('type', 'LIKE', '%'. $q. '%')
               ->get();
           
           return view('Annonce::recherche')->withDetails($ann)->withQuery($q);
       }
             
       else{
        return view('Annonce::recherche')->with('successMsg','Pas d\'annonce relier à cette recherche pour le moment') ;
    }
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
   
    public function showListing(){   
        $ann=Annonce::all()->where('status',1);
        
        return view('Annonce::listing',[
            'listing'=>$ann

        ]);
    }

    
    public function handleAnnonce(){
        // $clas=Category::find($id);

        $data= Input::all();
        $user_id=Auth::user()->id;
        $cred=Annonce::create([
            'titre'=>$data['titre'],
            'prix'=>$data['prix'],
            'description'=>$data['desc'],
            'etat'=>$data['etat'],
            'telephone'=>$data['tel'],
            'type'=>$data['type'],
            'status'=>1,
            'time_limit'=>$data['time'],
            'category_id'=>$data['category'],
            'user_id'=>$user_id

        ]);
$val=$cred->id;
       if($data['image']){
            foreach($data['image'] as $image){

                $photo=str_random(10).'.'.$image->getClientOriginalExtension();
                $image_Path=public_Path('storage/'.$photo);
                
                Image::make($image->getRealPath())->resize(500,500)->save($image_Path);
                
                

                $cred=Media::create([
                    
                    'url'=>$photo,
                    'annonce_id'=>$val

                ]);
            }
        }
        
        return back()->with('status','annonce ajouté avec success');
    }


    public function showSingle($id){   
        $ann=Annonce::find($id);
        $ann->count_visit++;
        $ann ->save();
        $cc=$ann->user_id;
    
        $user=User::all()->where('id',$cc);
        $ph=Media::all();

        return view('Annonce::detail',[
            'detail'=>$ann,
            'photo'=>$ph,
            'user'=>$user,
        ]);
    }

    public function updateAnnonce($id){   
        $data= Input::all();
        $user_id=Auth::user()->id;

        $cred=Annonce::where('id',$id)->update([
            'titre'=>$data['titre'],
            'description'=>$data['description'],
            'prix'=>$data['prix'],
            'etat'=>$data['etat'],
            'type'=>$data['type'],
            'status'=>$data['status'],
            'category_id'=>$data['cat'],
            'user_id'=>$user_id

        ]);
        return back();
    }

}
