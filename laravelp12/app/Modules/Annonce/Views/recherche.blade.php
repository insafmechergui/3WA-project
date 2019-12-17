@extends('layout')

@section('head')
    @include('inc.head',['title'=>'les Annonces'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
 
    <div class="wrapper">
<h3>Résultat pour votre recherche de " {{$query}} "</h3>

        <section class="page-content half-map sec-padding pt-0">
            <div class="container-full">
                <div class="page-content-details">
                    <div class="row">
                        <div class="col-xl-6 pl-0 pr-0 half-wd order--1">
                                <div class="listing-items">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="vertical-post" role="tabpanel" aria-labelledby="vertical-tab">
                                            <div class="sales-items">
                                                <div class="row">
                                                
                                             @if(isset($details))
                                                 
                                                  @foreach($details as $rech)
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="sale-item">
                                                            <div class="item-img">
                                                                @if(count($rech->medias)>0)
                                                                    <img src="{{asset('storage/'.$rech->medias->first()->url)}}" alt="titre">
                                                                @endif
                                                                <span class="item-status">{{$rech->type}}</span>
                                                                <a href="{{route('showSingle',$rech->id)}}" title="" class="view-btn">View</a>
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
                                                            </div>

                                                            <div class="item-info">
                                                                <h3>{{$rech->titre}}</h3>
                                                                <span>{{$rech->description}}</span>
                                                                <div class="specs-info">
                                                                    <ul>
                                                                        <li>Beds: 4 </li>
                                                                        <li>Baths: 2 </li>
                                                                        <li>Sqft: 1,570</li>
                                                                    </ul>
                                                                    <strong class="item-price">{{$rech->prix}}</strong>
                                                                </div><!--specs-info end-->
                                                            </div><!--item-info end-->

                                                        </div><!--sale-item end-->
                                                    </div>
                                                @endforeach
                                            @elseif(!empty($successMsg))
  <div class="alert alert-success"> {{ $successMsg }}</div>
                                           @endif
                                                   
                                                </div>
                                            </div><!--sales-items end-->
                                        </div>
                                    </div>
                                </div><!--listing-items end-->
                            </div><!--listing-sec end-->
                        </div>
                    </div>
                </div><!--page-content-details end-->
        </section><!--page-content end-->

</div>

@endsection

        @section('footer')
            @include('inc.footer')

        @endsection

