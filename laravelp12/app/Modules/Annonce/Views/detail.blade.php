        
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'User profil'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
    <div class="wrapper">
<section class="page-content sec-padding pt-0">
            <div class="container">
                <div class="page-content-details">
                    <div class="sale-item single-details">
                        <div class="item-info">
                            <div class="half-left">
                                <h3>{{$detail->titre}}</h3>
                                <div class="specs-info">
                                    <span>{{$detail->count_visit}} vue(s)</span>
                                </div><!--specs-info end-->
                            </div>
                            <div class="half-right">
                                <strong class="item-price">{{$detail->prix}} DT</strong>
                                <span>{{$detail->etat}}</span>
                            </div>
                        </div>
                        
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner" >
                            @foreach($detail->medias as $media)

                            <div class="carousel-item active">
                                    @if ($loop->first)
                                        <img class="d-block w-100" src="{{asset('storage/'.$media->url)}}" alt="First slide">
                                    @endif
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('storage/'.$media->url)}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('storage/'.$media->url)}}" alt="Third slide">
                            </div>
                            @endforeach

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                        <div class="item-more-details">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="single-post">
                                        <div class="pro-info description-pro">
                                         
                                            <h3>Description</h3>
                                            <div class="hidden open">
                                                <p>{{$detail->description}}</p>
                                            </div>
                                        </div><!--pro-info end-->
                                        <div class="pro-info features-pro">
                                            <h3>Features</h3>
                                            <ul class="hidden open">
                                                <li><span>Central Heating</span></li>
                                                <li><span>Fire Alarm</span></li>
                                                <li><span>Home Theater</span></li>
                                                <li><span>TV Cable</span></li>
                                                <li><span>Dual Sinks</span></li>
                                                <li><span>Fire Place</span></li>
                                                <li><span>Laundry Room</span></li>
                                                <li><span>Wi-Fi</span></li>
                                                <li><span>Electric Range</span></li>
                                                <li><span>Wine Cellar</span></li>
                                                <li><span>Marble Floors</span></li>
                                                <li><span>Gym</span></li>
                                            </ul>
                                        </div><!--features-pro end-->
                                        <div class="pro-info add-details">
                                            <h3>Additional Details</h3>
                                            <ul class="hidden open">
                                                <li>
                                                    <strong>Appliance:</strong>
                                                    <span>Air Conditioning, Dishwasher, Dryer,  Built-In Range </span>
                                                </li>
                                                <li>
                                                    <strong>Bathroom Description:</strong>
                                                    <span>Tile Walls, Shower Over Tub, Bathtub </span>
                                                </li>
                                                <li>
                                                    <strong>Bedroom Features:</strong>
                                                    <span>Second Floor Bedroom, Master Suite, Walk-In Closet </span>
                                                </li>
                                                <li>
                                                    <strong>Dining Area:</strong>
                                                    <span>Dining Combo </span>
                                                </li>
                                                <li>
                                                    <strong>Doors & Windows:</strong>
                                                    <span>Stained Glass Windows, Wooden Doors </span>
                                                </li>
                                                <li>
                                                    <strong>Exterior Construction:</strong>
                                                    <span>Stucco</span>
                                                </li>
                                                <li>
                                                    <strong>Fireplace Location:</strong>
                                                    <span>Main Living Room </span>
                                                </li>
                                                <li>
                                                    <strong>Floor:</strong>
                                                    <span>Wall-to-Wall Carpet, Ceramic Tile </span>
                                                </li>
                                            </ul>
                                        </div><!--add-details end-->
                                    
                                    </div><!--single end-->        
                                </div>
                                <div class="col-xl-4">
                                    <div class="sidebar pl-35">
                                        <div class="widget widget-form">
                                           @foreach($user as $us)
                                            <div class="auth-info">
                                                <div class="auth-img">
                                                    <img src="{{asset('storage/'.$us->photo)}}" alt="" style="width:60%;">
                                                </div>
                                                <div class="auth_info">
                                                    <h3>{{$us->name}}</h3>
                                                    <ul>
                                                        <li>
                                                            <i class="la la-phone"></i>
                                                            <span>{{$us->phone}}</span>
                                                        </li>
                                                        <li>
                                                            <i class="la la-envelope"></i>
                                                            <a href="#" title="">{{$us->email}}</a>
                                                        </li>
                                                    </ul>
                                                </div><!--auth-info end-->
                                            </div><!--auth-info end-->
                                            @endforeach
                                            <form method="post" action="{{route('handleContact')}}">
                                                <div class="form-field">
                                                    <input type="text" name="name" placeholder="Your Name">
                                                </div><!--form-field end-->
                                                <div class="form-field">
                                                    <input type="text" name="email" placeholder="Your Email">
                                                </div><!--form-field end-->
                                                <div class="form-field">
                                                    <input type="text" name="titre" placeholder="Your title">
                                                </div><!--form-field end-->
                                                <div class="form-field">
                                                    <textarea name="message" placeholder="Your Message"></textarea>
                                                </div><!--form-field end-->
                                                <div class="form-submit">
                                                    <button type="submit" class="lnk-default">Send Message</button>
                                                </div>
                                                
                        {{csrf_field()}}
                                            </form>
                                        </div><!--widget-form end-->
                                        
                                    </div><!--sidebar end-->
                                </div>
                            </div>
                        </div><!--item-more-details end-->
                    </div><!--sale-item end-->
                </div><!--page-content-details end-->
            </div>
        </section><!--page-content end-->

        

    </div>
@endsection

        @section('footer')
            @include('inc.footer')

        @endsection
