
@extends('layout')

@section('head')
    @include('inc.head',['title'=>'accueil'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')

<div class="container">

<h2>{{$voiture->model}}</h2>
<span>{{$voiture->prix}} DT</span>


<div class="info-box" >
      <form action="{{route('handleReservation')}}" method="post">
        <input type="hidden" name="id" value="{{$voiture->id}}">
        
        <label for="date">Date de réservation</label>
        <input type="date" class="form-control" name="date_locat">
        <input type="time" class="form-control" name="time_locat">

         <label for="date">Date de retour</label>
        <input type="date" class="form-control" name="date_ret">
        <input type="time" class="form-control" name="time_ret">

        <input type="submit" class="btn" value="Reserver">
        {{csrf_field()}}
      </form>
</div>
</div>
    @endsection

    @section('footer')
      @include('inc.footer')
    @endsection
