        
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'User profil'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
    <div class="wrapper">

        <section class="page-content sec-padding">
            <div class="container">
                <div class="sec-title">
                    <h3>Agent Profile</h3>
                </div><!--sec-title end-->
                <div class="page-content-details">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="agent-profile-sec team-sec">
                                <div class="team">
                                    <div class="member-img">
                                        <img src="{{asset('storage/'.Auth::user()->photo)}}" alt="" style="width: 50%;">
                                    </div><!--member-img end-->
                                    <div class="team-info">
                                        <h3>{{Auth::user()->name}}</h3>
                                        <span>Moison Director</span>
                                        
                                        <ul class="emt-links">
                                            <li>
                                               <i class="fas fa-phone"></i>
                                               <p>{{Auth::user()->phone}}</p> 
                                            </li>
                                            <li>
                                                <i class="far fa-envelope"></i>
                                                <p>{{Auth::user()->email}}</p>
                                            </li>
                                        </ul>
                                    </div><!--team-info end-->
                                </div>
                            </div><!--agent-profile-sec end-->
                           
                        </div>
                        
                        <div class="col-lg-4">
                            <div class="sidebar agt-yt">
                                <div class="widget widget-form">
                                    <h3 class="widget-title">Update profil</h3>
                                    <form method="post" action="{{route('handleUpdateProfil',Auth::user()->id)}}" enctype="multipart/form-data">
                                        <div class="form-field">
                                            <input type="text" name="nom" value="{{Auth::user()->name}}">
                                        </div><!--form-field end-->
                                        <div class="form-field">
                                            <input type="text" name="mail" value="{{Auth::user()->email}}">
                                        </div><!--form-field end-->
                                        <div class="form-field">
                                            <input type="tel" name="tel" value="{{Auth::user()->phone}}">
                                        </div><!--form-field end-->
                                       
                                        <div class="form-field">
                                            <input type="file" name="photo" >
                                        </div><!--form-field end-->
                                        
                                        <div class="form-submit">
                                            <button type="submit" class="btn">Update</button>
                                        </div>
                                        {{csrf_field()}}

                                    </form>
                                </div>
                            </div><!--sidebar end-->
                        </div>
                         <div class="single-post aget-pge">
                                <div class="pro-info map-dv">
                                    <h3>Properties Location</h3>
                                    
                                    <div class="sales-items horizental-view">                                            
                                        @foreach($annonce as $ann)
                                        <div class="sale-item">                                               
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3">
                                                    <div class="item-img">
                                                        @if(count($ann->medias)>0)
                                                            <img src="{{asset('storage/'.$ann->medias->first()->url)}}" alt="titre">
                                                        @else
                                                                
                                                            <img src="{{asset('assets/images/user.jpg')}}" alt="">
                                                        @endif
                                                           <span class="item-status">{{$ann->type}}</span>
                                                        <a href="{{route('showSingle',$ann->id)}}" title="" class="view-btn">View</a>
                                                        <div class="figcaption">
                                                            <ul>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                                <li><i class="fa fa-star"></i></li>
                                                            </ul>
                                                            <a href="#" title="" class="add-to-cart"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div><!--item-img end-->
                                                </div>
                                                
                                                <div class="col-lg- col-md-6 col-sm-6">
                                                    <div class="item-info">
                                                        <h3><a href="{{route('showSingle',$ann->id)}}" title="">{{$ann->titre}}</a></h3>
                                                        @if($ann->status == 1)
                                                            <p>Activer </p>
                                                            @else
                                                            <p>Desactiver </p>
                                                            @endif
                                                        <p>{{$ann->description}}</p>
                                                        <div class="specs-info">
                                                            <ul>
                                                                <li>Beds: 4 </li>
                                                                <li>Sqft: 1,570</li>
                                                            </ul>
                                                            <strong class="item-price">{{$ann->prix}} DT</strong>
                                                            
                                                        </div><!--specs-info end-->
                                                    </div><!--item-info end-->
                                                </div>
                                                 
                        <div class="col-lg-3 col-md-3 col-sm-3 showupdateannonce">
                            <div class="sidebar agt-yt">
                                <div class="widget widget-form">
                                    <h3 class="widget-title">Update annonce</h3>
                                    <form method="post" action="{{route('updateAnnonce',$ann->id)}}" enctype="multipart/form-data">
                                        <div class="form-field">
                                            <input type="text" name="titre" value="{{$ann->titre}}">
                                        </div><!--form-field end-->
                                        <div class="form-field">
                                           <textarea name="description" id="" cols="20" rows="10">{{$ann->description}}</textarea>
                                        </div><!--form-field end-->
                                        <div class="form-field">
                                            <input type="text" name="prix" value="{{$ann->prix}}"> 
                                        </div><!--form-field end-->
                                       
                                        <div class="form-field">
                                            <input type="file" name="photo[]" multiple>
                                        </div><!--form-field end-->
                                        
                                         <div class="form-field">
                                            <input type="text" name="etat" value="{{$ann->etat}}"> 
                                        </div><!--form-field end-->
                                        
                                         <div class="form-field">
                                           <select name="type" id="">
                                               <option value="vente">Vente</option>
                                               <option value="location">Location</option>
                                           </select>
                                        </div><!--form-field end-->
                                        
                                         <div class="form-field">
                                           <select name="cat" id="">
                                              @foreach($category as $cat)
                                               <option value="{{$cat->id}}">{{$cat->name}}</option>
                                               @endforeach
                                           </select>
                                        </div><!--form-field end-->
                                           
                                         <div class="form-field">
                                           <select name="status" id="">
                                               <option value="0">Désactiver</option>
                                               <option value="1">Activer</option>
                                           </select>
                                        </div><!--form-field end-->
                                        
                                        <div class="form-submit">
                                            <button type="submit" class="btn">Update Annonce</button>
                                        </div>
                                        {{csrf_field()}}

                                    </form>
                                </div>
                            </div><!--sidebar end-->
                        </div>
                                            </div>                                
                                           <button class="btn updateAnnonce">Update Annonce</button>
                                        </div><!--sale-item end-->
                                       @endforeach
                                       
                                    </div><!--sales-items end-->
                                    
                                </div><!--map-dv end-->
                            </div><!--single-post end-->
                        </div>
                    </div>
                </div><!--page-content-details end-->
            
        </section><!--page-content end-->

       


</div>
@endsection

        @section('footer')
            @include('inc.footer')
<script>
$( document ).ready(function() {
    $(".showupdateannonce").hide();
    $('.updateAnnonce').click(function(){
            $(".showupdateannonce").toggle();

    });
});
</script>
        @endsection
