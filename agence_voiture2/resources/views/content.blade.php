@extends('layout')

@section('head')
    @include('inc.head',['title'=>'Ajouter une voiture'])
@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')
  <div class="container">
<form class="form" method="POST" action="{{route('handleContent')}}" enctype="multipart/form-data">
    
    <div class="form-row">
      <label for="model">Model</label>
      <input type="text" name="model"/>
    </div>
    <div class="form-row">
      <label for="marque">Marque</label>
      <input type="text" name="marque"/>
    </div>
    <div class="form-row">
      <label for="porte">Puissance</label>
      <input type="number" name="puissance"/> chevaux
    </div>
    <div class="form-row">
      <label for="porte">Boite Vitesse</label>
        <select name="boite_vitesse">
            <option value="automatique">Automatique</option>
            <option value="manuelle">Manuelle</option>
        </select>    
    </div>
    <div class="form-row">
      <label for="porte">Consommation de Carburant </label>
      <input type="number" name="consommation"/> 
    </div>
    
    <div class="form-row">
      <label for="type">Type</label>
      <select name="type" class="form-control" >
              @foreach($type as $types)
        <option value="{{$types->id}}">{{$types->type}}</option>
              @endforeach 

      </select> 
    </div>

    <div class="form-row">
      <label for="etat">Etat</label>
      <select name="etat" class="form-control" >
              @foreach($etats as $etat)
        <option value="{{$etat->id}}">{{$etat->etat}}</option>
              @endforeach 

      </select> 
    </div>
    <div class="form-row">
      <label for="prix">Prix / DT</label>
      <input type="text" name="prix" /> 
    </div>
    <div class="form-row">
      <label for="coleur">Coleur</label>
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
      <label for="photo">Photo</label>
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
