
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'accueil'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
    <div class="wrapper">

        <section class="main-banner-sec overlay">
            <div class="container">
                <div class="banner-details text-center">
                    <h2>Find your future home</h2>
                    <p>Where you can find happiness</p>
                    <form  class="navbar-search " method="post" action="{{route('recherche')}}">
                        <div class="form-field">
                            <input name="titre" type="search" class="search-query" placeholder="search"> 
                             
                            <button type="submit" class="btn "><i class="fas fa-search"></i></button>
                        </div><!--form-field end-->
                        {{csrf_field()}}
                    </form>
                        
                </div><!--banner-details end-->
            </div>
        </section><!--main-banner-sec end-->
        <section class="categories-sec sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Categories</h3>
                </div><!--sec-title end-->
                <div class="categories-sec-details">
                    <div class="row">
                        @foreach ($category as $cat)

                        <div class="col-lg-4 col-md-6 col-sm-6">

                            <div class="category-info overlay">
                                <img src="{{asset('assets/images/'.$cat->photo)}}" alt="category">
                                <a href="{{route('showCategory',$cat->id)}}" title="" class="ext-link"></a>
                                <div class="category-details">
                                    <span><i class="la la-certificate"></i></span>
                                    <div class="cat-info">
                                        <h3><a href="" title="">{{$cat->name}}</a></h3>
                                    </div>
                                </div><!--category-details end-->
                   
                            <span>{{count($cat->annonce)}} Annonce(s)</span>

                            </div><!--category-info end-->

                        </div>
                        @endforeach

                    </div>
                </div><!--categories-sec-details end-->
            </div>
        </section><!--categories-sec end-->

        <section class="sale-items-sec sec-padding">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <h3>Latest For sale</h3>
                </div><!--sec-title end-->
                <div class="sales-items">
                    <div class="row">
                       @foreach ($annonce as $ann)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="sale-item">
                                <div class="item-img over_lay">
                                    <a href="" title="" class="ext-link">
                                        @if(count($ann->medias)>0)
                                            <img src="{{asset('storage/'.$ann->medias->first()->url)}}" alt="" >
                                        @endif
                                    </a>                                        
                                    <span class="item-status">{{$ann->type}}</span>
                                </div>
                                <div class="item-info">
                                    <h3><a href="{{route('showSingle',$ann->id)}}" title="">{{$ann->titre}}</a></h3>
                                    <span>{{$ann->etat}}</span>
                                    <div class="specs-info">
                                        <ul>
                                            <li>Beds: 4 </li>
                                            <li>Baths: 2 </li>
                                            <li>Sqft: 1,570</li>
                                        </ul>
                                        <strong class="item-price">{{$ann->prix}} DT</strong>
                                    </div><!--specs-info end-->
                                </div><!--item-info end-->
                            </div><!--sale-item end-->
                        </div>
                        @endforeach
                    </div>
                </div><!--sales-items end-->
            </div>
        </section><!--sale-items-sec end-->



        <section class="team-sec sec-padding">
            <div class="container">
                <div class="sec-title text-center">
                    <h3>Our Team</h3>
                </div><!--sec-title end-->
                <div class="team-sec-details">
                    <div class="row">
                       @foreach($user as $us)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="team">
                                <div class="member-img">
                                    <a href="" title="" class="ext-link">
                                        <img src="{{asset('storage/'.$us->photo)}}" alt="" style="width:40%;">
                                    </a>
                                </div><!--member-img end-->
                                <div class="team-info">
                                    <h3><a href="" title="">{{$us->name}}</a></h3>
                                    <span>{{$us->phone}}</span>
                                    <p>{{$us->email}}</p>
                                    
                                </div><!--team-info end-->
                            </div><!--team end-->
                        </div>
                        @endforeach
                    </div>
                </div><!--team-sec-details end-->
            </div>
        </section><!--recent-posts-sec end-->

        
       
</div>
@endsection

        @section('footer')
            @include('inc.footer')

        @endsection



