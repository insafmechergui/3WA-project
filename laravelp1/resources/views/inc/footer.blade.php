<footer>
<div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-lg-3 col_1">
                            <div class="widget widget-about">
                                <h3 class="widget-title">Moison Real Estate</h3>
                                <p>© 2019</p>
                            </div><!--widget-about end-->
                        </div>
                        <div class="col-lg-3 col_2">
                            <div class="widget widget-contact">
                                <h3 class="widget-title">Information</h3>
                                <ul class="cont-links">
                                    <li>
                                        <i class="la la-phone"></i>
                                        +1 212-758-8877
                                    </li>
                                    <li>
                                        <i class="la la-map-marker"></i>
                                        1 E 57th St, New York
                                    </li>
                                    <li>
                                        <i class="la la-clock-o"></i>
                                        10AM - 9PM
                                    </li>
                                </ul>
                            </div><!--widget-contact end-->
                        </div>
                        <div class="col-lg-3 col_3">
                            <div class="widget widget-links">
                                <h3 class="widget-title">Features</h3>
                                <ul>
                                    <li><a href="#" title="">Admin Panel</a></li>
                                    <li><a href="#" title="">Submit Property</a></li>
                                    <li><a href="#" title="">Support Docs</a></li>
                                    <li><a href="#" title="">Pricing</a></li>
                                </ul>
                            </div><!--widget-links end-->
                        </div>
                        <div class="col-lg-3 col_4">
                            <ul class="social-links">
                                <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--footer-content end-->
            </div>
</footer>

            <div class="popup" id="login-form">
           
         
            <div class="popup-content">
                
                <div class="popup-head">
                    <ul>
                        <li class="active" data-tab="login"><a href="#" title="">Log in</a></li>
                        <li data-tab="register"><a href="#" title="">Register</a></li>
                    </ul>
                </div><!--popup-head end-->

                <div class="popup-form current" id="login">
                    <form method="post" action="{{route('handleConnexion')}}">
                        <div class="form-field">
                            <input type="email" name="mail" placeholder="email">
                        </div><!--form-field end-->
                        <div class="form-field">
                            <input type="password" name="pass" placeholder="Password">
                        </div><!--form-field end-->
                        <div class="form-submit">
                            <button type="submit" class="lnk-default">Log in</button>
                            <a href="#" title="" class="register-op" data-tab="register">Lost your password?</a>
                        </div><!--form-submit end-->
               {{csrf_field()}}

                    </form>
                    
                </div><!--popup-form end-->
                <div class="popup-form" id="register"> 
                    <form method="post" action="{{route('handleInscription')}}" enctype="multipart/form-data">
                        <div class="form-field">
                            <input type="text" name="name" placeholder="Name">
                        </div><!--form-field end-->
                        <div class="form-field">
                            <input type="email" name="mail" placeholder="Email">
                        </div><!--form-field end--> 
                        <div class="form-field">
                            <input type="tel" name="tel" placeholder="telephone">
                        </div><!--form-field end--> 
                        <div class="form-field">
                             <input type="file" name="photo" class="form-control" >
                        </div><!--form-field end-->
                        <div class="form-field">
                            <input type="password" name="pass" placeholder="Password">
                        </div><!--form-field end-->
                        
                        <div class="form-submit">
                            <button type="submit" class="lnk-default">Register Now</button>
                        </div><!--form-submit end-->
                        {{csrf_field()}}

                    </form>
                </div><!--popup-form end-->
            </div><!--popup-content end-->

        </div><!--popup end-->


    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-select.js')}}"></script>
    <script src="{{asset('assets/js/handleCounter.js')}}"></script>
    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0lxCRSHcNPBu5hq3wsmY1KhcBq5Tlwi8"></script>
    <script src="{{asset('assets/js/map-cluster/infobox.min.js')}}"></script>
    <script src="{{asset('assets/js/map-cluster/markerclusterer.js')}}"></script>
    <script src="{{asset('assets/js/map-cluster/maps.js')}}"></script>
    <!-- Custom Js Script File -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>

     
