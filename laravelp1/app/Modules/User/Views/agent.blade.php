
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'Agent'])
@endsection
@section('header')
    @include('inc.header')

@endsection
@section('content')

<div class="wrapper">

    <section class="team-sec agent-page sec-padding pt-0">
        <div class="container">
           <div class="sec-title m-0">
                <h3>Agents</h3>
            </div><!--sec-title end-->
            <div class="team-sec-details">
                <div class="row">
                    @foreach($user as $us)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="team">
                            <div class="member-img">
                                    <img src="{{asset('storage/'.$us->photo)}}" alt="" style="width:60%;">

                            </div><!--member-img end-->
                            <div class="team-info">
                                <h3><a href="" title="">{{$us->name}}</a></h3>
                                <span>{{$us->phone}}</span>
                                <p>{{$us->email}} </p>
                                @if(Auth::user()->id == $us->id)
                                <a href="{{route('afficherProfil',Auth::user()->id)}}" title="" class="lnk-default">View Profile</a>
                                @endif
                            </div><!--team-info end-->
                        </div><!--team end-->
                    </div>
                    @endforeach


                </div>
            </div><!--team-sec-details end-->
            <div class="sec-title m-0">
                <h3>Commentaires</h3>
            </div><!--sec-title end-->
                <div class="page-content-details">
                    <div class="sale-item single-details">
                        <div class="item-more-details">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-post">
                                        <div class="pro-info review-pro">
                                            <div class="comments-list hidden open">
                                                <ul>
                                             @foreach($cont as $con)

                                                    <li>
                                                        <div class="comment">
                                                           
                                                            <div class="comment-text">
                                                                <h3>{{$con->name}}</h3>
                                                                 <span>{{$con->created_at}}</span>
                                                                 <p>{{$con->email}}</p>
                                                                <p>{{$con->content}}</p>
                                                                
                                                            </div><!--comment-text end-->
                                                        </div>
                                                    </li>
                                                    
                                               @endforeach
                                                </ul>
                                            </div><!--review-sec end-->
                                        </div><!--review-pro end-->
                                    </div><!--single end-->        
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