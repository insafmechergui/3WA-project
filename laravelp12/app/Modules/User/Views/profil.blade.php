        
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
                                                <i class="la la-phone"></i>
                                                {{Auth::user()->phone}}
                                            </li>
                                            <li>
                                                <i class="la la-envelope"></i>
                                                <a href="mailto:example@example.com" title="">{{Auth::user()->email}}</a>
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
                                    <form method="post" action="{{route('handleUpdateProfil',$user->id)}}" enctype="multipart/form-data">
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
                                <div class="widget widget-advertisment">
                                    <a href="#" title=""><img src="assets/images/resources/adv-img.jpg" alt=""></a>
                                </div><!--widget-advertisment end-->
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
