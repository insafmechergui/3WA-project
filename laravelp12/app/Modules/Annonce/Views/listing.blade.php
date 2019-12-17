@extends('layout')

@section('head')
    @include('inc.head',['title'=>'les Annonces'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
 
    <div class="wrapper">

        

        <section class="page-content sec-padding">
            <div class="container">
                <div class="page-content-details">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="listing-sec">
                                
                                <div class="listing-items pc-tg-right">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="vertical-post" role="tabpanel" aria-labelledby="vertical-tab">
                                            <div class="sales-items">
                                                <div class="row">
                                                    @foreach($listing as $list)

                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="sale-item">
                                                            <div class="item-img">
                                                                
                                                                    @if(count($list->medias)>0)
                                                                        <img src="{{asset('storage/'.$list->medias->first()->url)}}" alt="titre">
                                                                    @else
                                                                
                                                                    <img src="{{asset('assets/images/user.jpg')}}" alt="">
                                                                @endif
                                                                <span class="item-status">{{$list->type}}</span>
                                                                <a href="{{route('showSingle',$list->id)}}" title="" class="view-btn">View</a>
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
                                                                <h3><a href="" title="">{{$list->titre}}</a></h3>
                                                                <span>{{$list->etat}}</span>
                                                                <div class="specs-info">
                                                                    <ul>
                                                                        <li>Beds: 4 </li>
                                                                        <li>Sqft: 1,570</li>
                                                                    </ul>
                                                                    <strong class="item-price">{{$list->prix}} DT</strong>
                                                                    
                                                                    <p>{{$list->count_visit}} vue(s)</p>
                                                                </div><!--specs-info end-->
                                                            </div><!--item-info end-->
                                                            
                                                        </div><!--sale-item end-->

                                                    </div>
                                                    @endforeach

                                                </div><!--sale-item end-->
                                                
                                            </div><!--sales-items end-->
                                        </div>
                                    </div>
                                </div><!--listing-items end-->
                              
                            </div>
                        </div><!--page-content-details end-->
                    </div>
                </div>
            </div>
        </section><!--page-content end-->

       
        
</div>

@endsection

        @section('footer')
            @include('inc.footer')
        @endsection

