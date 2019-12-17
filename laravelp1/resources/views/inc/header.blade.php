            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        
                        
                              <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <address class="contact-num">
                                  @if(Auth::user())

                                    <span><i class="fa fa-phone"></i> {{Auth::user()->phone}}</span>
                                  @endif
                                    
                                </address>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-6 col-6" style="color: white;">
                          @if(Auth::user())

                            <span class="login-form">
                                @if(Auth::user()->photo)
                                <a href="{{route('afficherProfil',[Auth::user()->id])}}">

                                    <img src="{{asset('/')}}storage/{{Auth::user()->photo}}" alt="" style="width: 5%;border-radius: 40%;">
                                </a>
                                @else
                                <img src="{{asset('assets/images/user2.jpg')}}" alt="" style="width: 5%;border-radius: 40%;">
                                @endif
                            </span>
                                <strong>Salut {{Auth::user()->name}}</strong>

                            <div class="log-details">

                            <a href="{{route('handleLogOut')}}">Déconnexion</a>
                            </div><!--log-details end-->

                        @else (!Auth::user())
                            <span>Veuillez se connecter</span>                       
                            <div class="log-details">
                                <span class="login-form"><i class="la la-user"></i> <b>Login</b>/<b>Register</b></span>
                            </div><!--log-details end-->
                        @endif
                        </div>

                            </div><!--wrapper end-->                           

                    </div>
            </div><!--top-bar end-->
            <div class="bottom-header">
                <div class="container">
                    <div class="navigation text-right">
                        <nav>
                            <ul>
                                <li><a href="{{route('showHome')}}" title="">Home</a></li>
                                <li><a href="{{route('showListing')}}" title="">Properties</a></li>
                            </ul>
                        </nav>
                    </div><!--navigation end-->
                    <div class="logo text-center">
                        <a href="" title="">
                            <img src="{{asset('assets/images/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="navigation float-right text-left">
                        <nav>
                            <ul>
                               <li><a href="{{route('showAgent')}}" title="">Agents</a></li>
                                <li><a href="{{route('handleContact')}}" title="">Contact</a></li>
                        @if(Auth::user())
                                <li><a href="{{route('showHomeAnnonce')}}" title="">Ajouter une annonce</a></li>
                        @endif

                            </ul>
                        </nav>
                    </div>
                    <div class="menu-btn">
                        <a href="#" title="">
                            <span class="bar1"></span>
                            <span class="bar2"></span>
                            <span class="bar3"></span>
                        </a>
                    </div><!--menu-btn end-->
                </div>
            </div><!--bottom-header end-->
             <div class="responsive-mobile-menu">
            <ul>
                <li><a class="active" href="{{route('showHome')}}" title="">Home</a></li>
                <li><a href="{{route('showListing')}}" title="">Properties</a></li>
                    
                <li><a href="{{route('showAgent')}}" title="">Agents</a></li>
                
                <li><a href="{{route('handleContact')}}" title="">Contact</a></li>
                <li><a href="#" title="">Buy Template</a></li>
            @if(Auth::user())
                <li><a href="{{route('showHomeAnnonce')}}" title="">Ajouter une annonce</a></li>
            @endif
            </ul>
        </div><!--responsive-mobile-menu end-->
