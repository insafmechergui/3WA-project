@extends('layout')

@section('head')
    @include('inc.head',['title'=>'Ajouter une voiture'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
  <div class="container">
<form class="form" method="POST" action="{{route('handlecontent')}}" enctype="multipart/form-data">
    
    <div class="form-row">
      <label for="model">model</label>
      <input type="text" name="model"/>
    </div>
    <div class="form-row">
      <label for="marque">marque</label>
      <input type="text" name="marque"/>
    </div>
    <div class="form-row">
      <label for="porte">puissance</label>
      <input type="text" name="puissance"/>
    </div>
    <div class="form-row">
      <label for="type">type</label>
      <select name="type" class="form-control" >
              @foreach($type as $types)
        <option value="{{$types->id}}">{{$types->type}}</option>
              @endforeach 

      </select> 
    </div>

    <div class="form-row">
      <label for="etat">etat</label>
      <select name="etat" class="form-control" >
              @foreach($etats as $etat)
        <option value="{{$etat->id}}">{{$etat->etat}}</option>
              @endforeach 

      </select> 
    </div>
    <div class="form-row">
      <label for="prix">prix</label>
      <input type="text" name="prix" />
    </div>
    <div class="form-row">
      <label for="coleur">coleur</label>
      <input type="text" name="coleur" />
    </div>
    <div class="form-row">
      <label for="place">nb de place</label>
      <input type="number" name="place"/>
    </div>
    <div class="form-row">
      <label for="porte">nb de porte</label>
      <input type="number" name="porte"/>
    </div>
    <div  class="form-control" >
      <label for="photo">photo</label>
      <input type="file" name="photo[]" multiple />
    </div>
    

    <div class="form-row">
      <button class="submit-button" type="submit" >
        Ajouter une voiture 
      </button>
      
    </div>
    {{csrf_field()}}
  </form>
</div>
@endsection

        @section('footer')
            @include('inc.footer')

        @endsection
