
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'Annonce categorie'])
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
                        <div class="col-xl-8 col-lg-12">
                            <div class="listing-sec">
                                
                                <div class="listing-items">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="horizental-post" role="tabpanel" aria-labelledby="horizental-tab">
                                            <div class="sales-items">
                                                <div class="row">
                                                   @foreach($category as $cat)

                                                    <div class="col-xl-6 col-lg-6 col-md-6">

                                                        <div class="sale-item">
                                                            <div class="item-img">
                                                                <a href="11_Single_Properties_Standart.html" title="" class="ext-link">
                                                                    @if(count($cat->medias)>0)
                                                                    <img src="{{asset('storage/'.$cat->medias->first()->url)}}" alt="">
                                                                    @endif
                                                                </a>
                                                                <span class="item-status">{{$cat->type}}</span>
                                                                <a href="11_Single_Properties_Standart.html" title="" class="view-btn">View</a>
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
                                                                <h3><a href="" title="">{{$cat->titre}}</a></h3>
                                                                <span>{{$cat->etat}}</span>
                                                                <div class="specs-info">
                                                                    <ul>
                                                                        <li>Beds: 4 </li>
                                                                        <li>Baths: 2 </li>
                                                                        <li>Sqft: 1,570</li>
                                                                    </ul>
                                                                    <strong class="item-price">{{$cat->prix}} DT</strong>
                                                                </div><!--specs-info end-->
                                                            </div><!--item-info end-->
                                                        </div><!--sale-item end-->

                                                    </div>
                                                  @endforeach
                                                   
                                                </div>
                                            </div><!--sales-items end-->
                                        </div>
                                       
                                    </div>
                                </div><!--listing-items end-->
                                <div class="mai-pagination ta-left">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                              <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                              <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!--PAGINATION END-->
                            </div><!--listing-sec end-->
                        </div>
                        <div class="col-xl-4 col-lg-12 pl-35">
                            <div class="sidebar">
                                <div class="widget widget-search-properties">
                                    <h3 class="widget-title">Search Properties</h3>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-field">
                                                    <label>All Location</label>
                                                    <div class="custom-select">
                                                        <select>
                                                            <option value="0">All Location</option>
                                                            <option value="1">California</option>
                                                            <option value="2">New York</option>
                                                            <option value="3">Chicago</option>
                                                            <option value="4">Las Vegas</option>
                                                            <option value="5">Fullerton</option>
                                                        </select>
                                                    </div>
                                                </div><!--form-field end-->
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-field">
                                                    <label>Property Type</label>
                                                    <div class="custom-select">
                                                        <select>
                                                            <option value="0">All Property Types</option>
                                                            <option value="1">Property type 1</option>
                                                            <option value="2">Property type 2</option>
                                                            <option value="3">Property type 3</option>
                                                            <option value="4">Property type 4</option>
                                                        </select>
                                                    </div>
                                                </div><!--form-field end-->
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>Price from</label>
                                                    <div class="handle-counter" id="handleCounter">
                                                        <input type="text" value="50">
                                                        <ul>
                                                            <li><button class="counter-minus btn"><i class="fa fa-caret-up"></i></button></li>
                                                            <li><button class="counter-plus btn"><i class="fa fa-caret-down"></i></button></li>
                                                        </ul>
                                                    </div>
                                                </div><!--form-field end-->
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-field">
                                                    <label>Price to</label>
                                                    <div class="handle-counter" id="handleCounter2">
                                                        <input type="text" value="60">
                                                        <ul>
                                                            <li><button class="counter-minus btn"><i class="fa fa-caret-up"></i></button></li>
                                                            <li><button class="counter-plus btn"><i class="fa fa-caret-down"></i></button></li>
                                                        </ul>
                                                    </div>
                                                </div><!--form-field end-->
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <button type="submit" class="lnk-default">Filter</button>
                                            </div>
                                        </div>
                                    </form>
                                </div><!--widget-search-properties end-->
                                
                            </div><!--sidebar end-->
                        </div>
                    </div>
                </div><!--page-content-details end-->
            </div>
        </section><!--page-content end-->

    </div>
        
@endsection

        @section('footer')
            @include('inc.footer')

        @endsection