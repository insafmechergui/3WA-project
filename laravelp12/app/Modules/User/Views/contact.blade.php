@extends('layout')

@section('head')
    @include('inc.head',['title'=>'contact'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')

    <div class="wrapper">

        <section class="page-content sec-padding">
            <div class="container p-0">
                <div class="page-content-details">
                    <div class="sec-title text-center">
                        <h3>Contact Us</h3>
                    </div><!--sec-title end-->
                    <div class="contact-sec">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-details">
                                    <h3>Get In Touch</h3>
                                    
                                    <div class="contact-form">
                                        <h3>Send us a message</h3>
                                        <form class="js-ajax-form" method="post" action="{{route('handleContact')}}">
                                            <div class="form-group">
                                                <div class="missing-message">
                                                    Populate Missing Fields
                                                </div>
                                                <div class="success-message">
                                                    <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                                </div>
                                                <div class="error-message">Populate Missing Fields</div>
                                            </div><!--form-group end-->
                                            <div class="form-fields">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-field">
                                                            <input type="text" name="name" placeholder="Name" id="name">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-field">
                                                            <input type="email" name="email" placeholder="Email" id="email">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-field">
                                                            <input type="titre" name="titre" placeholder="titre" id="titre">
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-field">
                                                            <textarea name="message" placeholder="Message"></textarea>
                                                        </div><!--form-field end-->
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-submit">
                                                            <button type="submit" class="lnk-default submit">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--form-fields end-->
               {{csrf_field()}}
                                        </form>
                                    </div><!--contact-form end-->
                                </div><!--contact-details end-->
                            </div>
                            
                        </div>
                    </div><!--contact-sec end-->
                </div><!--page-content-details end-->
            </div>
        </section><!--page-content end-->
    </div>
        @endsection

        @section('footer')
            @include('inc.footer')

        @endsection

