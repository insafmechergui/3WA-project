@extends('layout')

@section('head')
    @include('inc.head',['title'=>'new annonce'])
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
                        <h3>Ajouter une annonce</h3>
                    </div><!--sec-title end-->
                    <div class="contact-sec">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-details">
                                    <div class="contact-form">
                                        <form class="js-ajax-form" method="post" action="{{route('handleAnnonce')}}"  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="titre">Titre:</label>
                                                <input type="text" name="titre" class="form-control">
                                                <label for="image">Images:</label>
                                                <input type="file" name="image[]" class="form-control" multiple>
                                                <input type="file" name="image[]" class="form-control" multiple>
                                                <input type="file" name="image[]" class="form-control" multiple>
                                                <label for="prix">Prix:</label>
                                                <input type="text" name="prix" class="form-control">
                                                <label for="cat">Catégorie:</label>
                                                <select name="category" class="form-control">
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label for="desc">Description:</label>
                                                <textarea name="desc" cols="30" rows="10" class="form-control"></textarea>                                             
                                                <label for="address">Addresse:</label>
                                                <input type="text" name="etat" class="form-control">
                                                <label for="tel">Telephone:</label>
                                                <input type="text" name="tel" class="form-control">
                                                <label for="type">Type:</label>
                                                <select name="type" class="form-control">
                                                    <option value="Location">Location</option>
                                                    <option value="Vente">Vente</option>
                                                </select>    
                                                <label for="time">Date limite:</label>
                                                <input type="date" name="time" class="form-control">                                            
                                                <button type="submit" class="btn btn-info">Publier</button>
                                            </div><!--form-group end-->
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

