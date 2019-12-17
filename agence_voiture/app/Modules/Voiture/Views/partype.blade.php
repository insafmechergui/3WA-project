@extends('layout')

@section('head')
    @include('inc.head',['title'=>'Ajouter une voiture'])

@endsection
@section('header')
            @include('inc.header')

        @endsection
@section('content')

     
<input type="hidden" name="carResults" id="carResults" value="resultats-vehicule" />
<input type="hidden" name="carReviewandPay" id="carReviewandPay" value="verification-et-paiement" />
<input type="hidden" name="carConfirmation" id="carConfirmation" value="confirmation-de-reservation" />

  <input type="hidden" name="partnerFlag" id="partnerflag" value="false"/>
    <div class="wrapper">
      <div id="contentWrapper">
<div id="content">
  <span class="is-visually-hidden">Welcome to Avis</span>
  <!-- Begin Desktop Inspiration Module -->

 

<div class="row full">
  <div class="inspiration-container inspiration-container-offers">   
    <span class="responsive-background"
    data-small="https://avisassets.abgemea.com/.imaging/inspirationSmall/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg"
  data-small-retina="https://avisassets.abgemea.com/.imaging/inspirationSmallRetina/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg"
  data-medium="https://avisassets.abgemea.com/.imaging/inspirationMedium/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg"
  data-medium-retina="https://avisassets.abgemea.com/.imaging/inspirationMediumRetina/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg"
  data-large="https://avisassets.abgemea.com/.imaging/inspirationLarge/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg"
  data-large-retina="https://avisassets.abgemea.com/.imaging/inspirationLargeRetina/dms/DMS/global/generic/inspirational/mercedes-general-banner-inspirational.jpg" >
    </span>
    <div class="inspiration-main-content">
      <h1>Nos véhicules de location au Maroc</h1>
    </div>    
    <div class="tertiary-navigation-container">  
<div class="tertiary-bar">
  
<input type="hidden" id="searchStyleBookACar" value="S1">





<input type="hidden" value="&vehicleCategory=default" id="search-extend-default" />
<input type="hidden" value="&vehicleCategory=default" id="search-extend" />
<input type="hidden" value="enabled" id="search-default" />
 
<input type="hidden" id="qbParamsValIntoText" value="false"/>
  
  
    


  <a href="#" id="openQBPanel" class="book-a-car-link js-car-search-edit" data-ajax-url="/main/inspiration/0/quickForm/0?&&display=false&bookAcarparam=true&searchStyle=S1&vehicleCategory=default&exclusiveSearch=false&currentPageUuid=&hideAwdCode=false&hideAwdCodeAndMessage=false">
    <span class="book-link-closed">Réserver un 
      <span class="nowrap">Véhicule <i data-icon="&#xe015;" aria-hidden="true"></i></span>
    </span>
    <span class="book-link-open">
      <span class="nowrap">Fermer <i data-icon="&#xe015;" aria-hidden="true"></i></span>
    </span>
    <span class="book-link"></span>
  </a>
  <div id="car-search-target">
    <div class="car-search-wrapper"></div>
  </div>
  <nav class="extras-accordion tertiary-navigation-accordion"> 
    
  <a href="#" class="extras-accordion-header accordion-trigger">
    Notre gamme de voitures de location au maroc
    <span class="extras-expander">
      <i data-icon="&#xe015;" data-icon-active="&#xe014;" aria-hidden="true"></i>
    </span>
  </a>
<div class="extras-list">
  <ul  class="tertiary_navigation">
    
  
    
 
    
@foreach($type as $vt)
<li ><a  href="{{route('showType',$vt->id)}}" >Véhicules {{$vt->type}}<i data-icon="&#xe004;" aria-hidden="true" class="cm6-entry-arrow"></i></a></li>
     
    
 @endforeach
    
    <li>
      <div id="more">
        <a href="#">Suite <i id="tertiary_nav_arrow" data-icon="&#xe015;" data-icon-active="&#xe014;" aria-hidden="true"></i></a>
        <ul id="moreLinks"></ul>
      </div>
    </li>
    
   
  </ul>
</div>  </nav>     
</div><div class="tertiary-bar">
  
  <div id="car-search-target">
    <div class="car-search-wrapper"></div>
  </div>
  <nav class="extras-accordion tertiary-navigation-accordion"> 
    
<h2 class="extras-accordion-header">
  <a href="#" class="accordion-trigger">
    Notre gamme de voitures de location au maroc
    <span class="extras-expander">
      <i data-icon="&#xe015;" data-icon-active="&#xe014;" aria-hidden="true"></i>
    </span>
  </a>
</h2>
<div class="extras-list">
  <ul  class="tertiary_navigation">
    
  
    
    <li>
      <div id="more">
        <a href="#">Suite <i id="tertiary_nav_arrow" data-icon="&#xe015;" data-icon-active="&#xe014;" aria-hidden="true"></i></a>
        <ul id="moreLinks"></ul>
      </div>
    </li>
  </ul>
</div>  </nav>     
</div>    </div>   
  </div>
</div>







<input type="hidden" name="carResults" id="carResults" value="resultats-vehicule" />
<input type="hidden" name="carReviewandPay" id="carReviewandPay" value="verification-et-paiement" />
<input type="hidden" name="carConfirmation" id="carConfirmation" value="confirmation-de-reservation" />

  <input type="hidden" name="partnerFlag" id="partnerflag" value="false"/>
    <div class="wrapper">
      <div id="contentWrapper">
<div id="content">
  <span class="is-visually-hidden">Welcome to Avis</span>
   <!-- Assign the variables from model class Start -->
  
 
 <!-- Assign the variables from model class End -->

 
 <div class="row full header ">
  <div class="termslinkflow clearfix">
      <a href="#" class="showlinks">Merci de prendre connaissance de nos conditions générales </a>
  </div>
    
<div style="display:none" class="row full">
<div class="filter-container-responsive">

    <div class="is-visually-hidden" id="vehicle-results-filter-description">

        <h2>Comment utiliser ce filtre</h2>
      
        <p>
            Choisissez une section et une liste s’ouvrira dessous. De là, vous pourrez filtrer les résultats selon votre sélection.
        </p>
        <p>
            Veuillez ouvrir un filtre. Vous ne pouvez choisir qu’un filtre à la fois.
        </p>

    </div>

    <menu class="result-filter" aria-describedby="vehicle-results-filter-description">

        <div class="filter-item" data-options="size">
            <a href="#">
                <span class="is-visually-hidden">Ouvrir le filtre des</span><em class="filter-title">Tous les véhicules</em>
                <i data-icon="&#xe015;" data-icon-hover="&#xe014;" aria-hidden="true"></i>
            </a>
        </div>
        <ul class="filter-options options-size">
            <li>
                <label class="filter selected" for="size-all">
                    <span class="option">Tous les véhicules</span><span class="num"></span>
                </label>
                <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-all" value="" CHECKED />
            </li>
           
        
             <li>
              <label class="filter" for="size-small">
                <span class="option">Petite</span><span class="num"></span>
              </label>
              <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-small" value="small" />
            </li>     
        
            <li>
              <label class="filter" for="size-medium">
                <span class="option">Moyenne</span><span class="num"></span>
              </label>
              <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-medium" value="medium" />
            </li>                     
        
            <li>
              <label class="filter" for="size-large">
                <span class="option">Grande</span><span class="num"></span>
              </label>
              <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-large" value="large" />
            </li>
        
             <li>
              <label class="filter" for="size-estate">
                <span class="option">Familiales</span><span class="num"></span>
              </label>
              <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-estate" value="estate" />
            </li>     
        
            <li>
              <label class="filter" for="size-people-carriers">
                <span class="option">Monospaces</span><span class="num"></span>
              </label>
              <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-people-carriers" value="people-carriers" />
            </li>
           
            <li>
                <label class="filter" for="size-select">
                    <span class="option">Select Series</span><span class="num"></span>
                </label>
                <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-select" value="select" />
            </li>
            <li>
                <label class="filter" for="size-van">
                    <span class="option">Utilitaires</span><span class="num"></span>
                </label>
                <input class="has-priority" type="radio" name="filter-size" data-dimension="size" id="size-van" value="van" />
            </li>
        </ul>

        <div class="filter-item" data-options="transmission">
            <a href="#">
                <span class="is-visually-hidden">Ouvrir le filtre des</span><em class="filter-title">Manuelle et automatique</em>
                <i data-icon="&#xe015;" data-icon-hover="&#xe014;" aria-hidden="true"></i>
            </a>
        </div>

        <ul class="filter-options options-transmission">
            <li>
                <label class="filter selected" for="transmission-all">
                     <span class="option">Manuelle et automatique</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-transmission" data-dimension="transmission" id="transmission-all" value="" CHECKED />
            </li>
            <li>
                <label class="filter" for="transmission-manual">
                    <span class="option">Manuelle uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-transmission" data-dimension="transmission" id="transmission-manual" value="manual" />
            </li>
            <li>
                <label class="filter" for="transmission-auto">
                    <span class="option">Automatique uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-transmission" data-dimension="transmission" id="transmission-auto" value="auto" />
            </li>
        </ul>

        <div class="filter-item" data-options="fuel">
            <a href="#">
                <span class="is-visually-hidden">Ouvrir le filtre des</span><em class="filter-title">Tous types de carburant</em>
                <i data-icon="&#xe015;" data-icon-hover="&#xe014;" aria-hidden="true"></i>
            </a>
        </div>

        <ul class="filter-options options-fuel">
            <li>
                <label class="filter selected" for="fuel-all">
                    <span class="option">Tous types de carburant</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-all" value="" CHECKED />
            </li>
            <li>
                <label class="filter" for="fuel-diesel">
                    <span class="option">Diesel uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-diesel" value="diesel" />
            </li>
            <li>
                <label class="filter" for="fuel-petrol">
                    <span class="option">Essence uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-petrol" value="petrol" />
            </li>
            <li>
                <label class="filter" for="fuel-hybrid">
                    <span class="option">Hybrides uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-hybrid" value="hybrid" />
            </li>
            <li>
                <label class="filter" for="fuel-electric">
                    <span class="option">Électriques uniquement</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-electric" value="electric" />
            </li>
            <li>
                <label class="filter" for="fuel-mixed">
                    <span class="option">Tous types de carburant</span><span class="num"></span>
                </label>
                <input type="radio" name="filter-fuel" data-dimension="fuel" id="fuel-mixed" value="mixed" />
            </li>
        </ul>

        <div class="filter-item checkbox" data-options="aircon">
            <label for="ac-only">
                <em class="filter-title">Avec climatisation</em>
                <input type="checkbox" name="ac-only" data-dimension="aircon" id="ac-only" value="aircon" />
                <i data-icon="&#xe001;" aria-hidden="true"></i>
            </label>
        </div>
    <div class="filter-item checkbox" data-options="gps">
            <label for="gps-only">
                <em class="filter-title">GPS</em>
                <input type="checkbox" name="gps-only" data-dimension="gps" id="gps-only" value="gps" />
                <i data-icon="&#xe001;" aria-hidden="true"></i>
            </label>
        </div>
    <div class="filter-item checkbox" data-options="snow">
            <label for="snow-only">
                <em class="filter-title">Pneus hiver</em>
                <input type="checkbox" name="snow-only" data-dimension="snow" id="snow-only" value="snow" />
                <i data-icon="&#xe001;" aria-hidden="true"></i>
            </label>
        </div>
    </menu>

</div>
</div>
</div><!---->
<input type="hidden" name="isUasorSds" id="isUasorSds" value=""/>
<input type="hidden" name="driverDob" id="driverDob" value=""/>
<input type="hidden" name="partnerProgram" id="partnerProgram" value="">
<input type="hidden" name="hideAwdNumber" id="hideAwdNumber" value="false">
<input type="hidden" name="hideAwdCodeAndMessage" id="hideAwdCodeAndMessage" value="false">
<input type="hidden" name="locationTax" id="locationTax" value=""/>

<div class="row full" id="gridview">

  <!-- DIG 756 START -->
  <!-- DIG 756 END -->
  <!-- AWD message -->


  <!-- AWD message -->
  <section class="search-results-wrapper clearfix">

      <!-- For PNPL Radio Button -->
      <!-- END -->

  

        
  
  @foreach($voiture as $voit)

        <article
          class="car-result-module type-car" data-size="small"
        data-aircon="aircon"  data-gps = "no-gps"  data-snow="no-snow"
        data-fuel="diesel"
        data-transmission="manual"
        data-vehicle-id="4"
        data-acriss-sipp="EDMD">
  

      

     

          <div class="balance-box">

        <div class="overflow-box">
          <header class="car-header">
            <div class="title">
              <h2 class="title vehicle-title">
              <em>
                Petite<span class="is-visually-hidden">groupe de véhicules</span>
              </em>
              <strong>{{$voit->model}}</strong>
              </h2>
              <a href="#toggletooltip" class="model tt-trigger">
                Ou similaire  groupe&nbsp;D&nbsp;véhicule
              <span class="tt-button"><span class="is-visually-hidden"> - Ou similaire  groupe&nbsp;D&nbsp;véhicule</span> ? </span>  
              </a>
              <mark class="tt">
                <div class="tt-content">
                  <p role="alert">Nous ne pouvons pas vous garantir avec exactitude ce modèle. En cas d'indisponibilité, nous nous engageons à vous en fournir un similaire de la même catégorie ou supérieure.</p>
                </div>
              </mark>
            </div>
      <!-- PNPL -->
<div class="PNPL">
                           <p class="price">
                            {{$voit->prix}} DT
                             <span class="additional">Prix du véhicule</span>
                           </p>
                      
                      
</div>      </header>

          <figure class="car-container image-placeholder">
            <button class="toggle">
              <i aria-hidden="true" data-icon="&#xe010;" data-icon-hover="&#xe012;"></i>
              <span class="is-visually-hidden">Montrer plus de modèles</span>
            </button>

             @foreach($media as $med)

      @if($med->voiture_id == $voit->id)

      <img src="{{asset('storage/'.$med->url)}}" alt="" style="width: 70%;">

      @break

      @endif
        @endforeach

          </figure>
        
          <div class="wrap-box">
            <ul class="spec-list">
              <li>
                <i aria-hidden="true" data-icon="&#xe00c;"></i>
                <span>{{$voit->nb_place}} places</span>
              </li>


              <li>
                <i aria-hidden="true" data-icon="&#xe00e;"></i>
                <span>2 Bagages</span>
              </li>
              <li>
                <i aria-hidden="true" data-icon="&#xe00b;"></i>
                <span>{{$voit->nb_porte}} portes</span>
              </li>

              <li>
                <i aria-hidden="true" data-icon="&#xe00a;"></i>
                <span>
                  Manuelle
                </span>
              </li>
        
              <li>
                <i aria-hidden="true" data-icon="&#xe00d;"></i><span>Climatisation</span>
              </li>
              <li>
                <i aria-hidden="true" data-icon="&#xe009;"></i>
                <span>Diesel</span>
              </li>
              <li>
                <i aria-hidden="true" data-icon="&#xe009;"></i>
                <span>{{$voit->puissance}}</span>
              </li>
       
 
 
            </ul>
      
       <!-- Enable pay Now and Pay Later Rates -->
      
             <div class="pnpl-block">
             
             <div class="clearfix">
                    <div class="pnpl-alignment" data-pnplvehicle-reference=2>
                            <span class="pnpl-currency">&nbsp;1 302,05 MAD&nbsp;</span>
                             <div class="pnpl-div">
                             <a href="#toggletooltip" class="model tt-trigger">
                                     <label>PAYER EN AGENCE</label>
                                     <span class="tt-button"> ? </span>
                             </a>
                             <mark class="tt">
                                     <div class="tt-content">
                                     <!-- <p role="alert">Payer au comptoir de l’agence.</br>Annulation sans frais jusqu’à 24 heures avant le retrait du véhicule</p> -->
                                         <a class="pnplBack pnplCloseOverlay" href="#pnplButton"><i aria-hidden="true" data-icon="&#xe002;"></i></a>
                         <ul>
                          <li><span>Payer au comptoir de l’agence.</span></li>
                          <li><span>Annulation sans frais jusqu’à 24 heures avant le retrait du véhicule</span></li>
                         </ul>
                                     </div>
                              </mark>
                             <input type="radio" id="plradioGroup2" name="radioGroup2" value="payLaterRadioButton" class="pnpl-margin" />
                             <label for="plradioGroup2"></label>
                           </div>
                    </div>
             </div> 
            
             </div>
             <input type="hidden" class="payNowLoyaltyPoints" value="0" />
             <input type="hidden" class="payLaterLoyaltyPoints" value="0" />
        <input type="hidden" class="defaultsPoints" value="0" />
          



            <div class="cover-box">
              <i class="aesthetic-01"></i>
            </div>
        
            <footer class="actions">
              <div class="clearfix">


                    <a href="{{route('showReservation',$voit->id)}}" class="continue" onclick="javascript:sessionStorage.removeItem('extras-popupShown');"> RÉSERVER<span class="is-visually-hidden">and book the Fiat 500 or similar for &pound;43.54</span><span aria-hidden="true" data-icon="&#xe004;"></span></a>
              </div>

              <div class="clearfix">
                <a href="#view-detail-2" class="details">Détails<span class="is-visually-hidden">for the Fiat 500 or similar</span> <span aria-hidden="true" data-icon="&#xe004;"></span></a>
              </div>
            </footer>
          </div>       
                          </div>
                                     </div>
        </article>
      <!-- For PNPL Radio Button -->
      <!-- END -->
      @endforeach

  

       
  </section>
</div>
<script class="template-vehicle-details-overlay" type="text/template">
  <div id="vehicle-details-overlay">
    <div class="car-details-actions">
      <a class="back" href="#button"><i aria-hidden="true" data-icon="&#xe002;"></i> Fermer</a>
        </div>
        <div id="overlay-content"></div>
    </div>
</script>
  <!--Code for desktop-->
<!-- BEGIN: Underscore Template Definition. -->
        <script class="template-vehicle-details-overlay" type="text/template">
        <div id="vehicle-details-overlay">
            <div class="car-details-actions">
                <a class="back" href="#button"><i aria-hidden="true" data-icon="&#xe00f;"></i> Back</a>
            </div>

            <div id="overlay-content"></div>
        </div>
    </script>
    <script class="template-vehicle-details-content" type="text/template">

    
        
<div class="vehicle <%= vehicleType %> <% if (vehicle.select) { %>select-vehicle<% } %>" aria-atomic="true" aria-live="assertive">

    <!-- Car image -->
<% if (vehicle.damageAmt===null){%>
<% var damageAmt="0.00";%>
<% }else{%>
<% var damageAmt=vehicle.damageAmt%>
<%}%>
<% if (vehicle.theftAmt===null){%>
<% var theftAmt="0.00";%>
<% }else{%>
<% var theftAmt=vehicle.theftAmt%>
<%}%>
    <% if (vehicle.images || vehicle.budgetImageUrl) { %>
        <div class="carousel car-details-carousel">
            <div class="wrapper">
                <ul class="images">
          <% if (vehicle.vehicleBrand === "avis") {%>
                    <% _.each(vehicle.images, function(image, index) { %>
                        <% var isHeroImage = index === 0; %>
                        <li class="image-container">
                            <% if (isHeroImage) { %>
                                <div class="position-helper-1">
                                    <div class="position-helper-2">
                            <% } %>
                            <img class="image" alt="" src="https://avisassets.abgemea.com<%= getImageUrl(image) %>" />
                            
                            <%  var imageName = getImageUrl(image);
                              if (imageName.length >0 && imageName.lastIndexOf("default.png")!=-1){
                            %>
                <span class="label desktopStyleLabel">Awaiting image</span>
              <% } %>     
              
                            <% if (isHeroImage) { %>
                                    </div>
                                </div>
                            <% } %>
                            <% if (isHeroImage && !vehicle.select) { %>
                                <div class="red-carpet"></div>
                            <% } %>
                        </li>
                    <% }) %>
          <% }else{%>
            <li class="image-container budget-img-container">
                            <div class="position-helper-1">
                                <div class="position-helper-2">
                  <img class="image" alt="" src="<%= vehicle.budgetImageUrl %>" />
                </div>
                            </div>
              <div class="red-carpet"></div>
                        </li>   
          <%}%>
                </ul>
            </div>
      
            <% if (vehicle.vehicleBrand ==="avis" && vehicle.images.length > 1) { %>
                <div class="navButton next icon" aria-hidden="true" data-icon="&#xe010;" data-icon-hover="&#xe012;" tabindex="0">
                    <span class="is-visually-hidden">Move to next panel</span>
                </div>
                <div class="navButton prev icon" aria-hidden="true" data-icon="&#xe011;" data-icon-hover="&#xe013;" tabindex="0">
                    <span class="is-visually-hidden">Back to previous panel</span>
                </div>
                <div class="nav">
                    <ul class="buttons"></ul>
                </div>
            <% } %>
            <div class="logo-box">
                <!-- Schema.org logo microdata reference -->
<div itemscope itemtype="http://schema.org/Organization">
    <meta itemprop="logo" content="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/schema-logo.png" />
</div>
<!-- /Schema.org logo microdata reference -->

<a href="#" class="avis-logo" >
  <span role="img"  aria-label="Avis car hire">
    <svg x="0px" y="0px" viewBox="480.014 487.143 86 24.152" enable-background="new 480.014 487.143 86 24.152"  xml:space="preserve">
  <title>Avis</title>
  <g>
    <path fill="#d4002a" d="M549.539,493.461c-1.461-1.31-2.797-1.742-4.225-1.742s-3.215,0.489-3.215,2.307c0,1.523,1.365,2.04,3.541,2.725
      c3.116,1.007,7.141,2.307,7.141,6.884c0,5.29-4.252,7.66-8.797,7.66c-3.279,0-6.592-1.2-8.603-3.312l3.403-3.492
      c1.356,1.459,3.381,2.227,5.199,2.227c1.688,0,3.182-0.651,3.182-2.5c0-1.753-1.755-2.34-4.773-3.317
      c-2.919-0.94-5.873-2.398-5.873-6.55c0-5.098,4.608-7.207,8.892-7.207c2.599,0,5.521,0.975,7.532,2.822L549.539,493.461z
       M495.21,501.752h-5.776l2.919-7.89L495.21,501.752z M504.688,510.71l-9.4-22.985h-5.529l-9.744,22.985h6.141l1.686-4.512h8.899
      l1.785,4.512H504.688z M524.41,487.725h-6.134l-5.323,16.61l-5.42-16.61h-6.232L510,510.71h5.551L524.41,487.725z M526.635,510.71
      h5.583v-22.985h-5.583V510.71z"/>
  </g>
  <g>
    <path fill="#d4002a" d="M561.791,487.237c-2.314,0-4.195,1.859-4.195,4.186c0,2.328,1.881,4.15,4.195,4.15c2.34,0,4.223-1.822,4.223-4.15
      C566.014,489.096,564.131,487.237,561.791,487.237z M561.791,494.969c-1.945,0-3.529-1.609-3.529-3.546
      c0-1.959,1.584-3.543,3.529-3.543c1.967,0,3.56,1.584,3.56,3.543C565.351,493.36,563.758,494.969,561.791,494.969z"/>
    <path fill="#d4002a" d="M562.484,491.7c0.668-0.147,1.092-0.592,1.092-1.275c0-1.014-0.872-1.384-1.776-1.384h-1.638v4.728h0.851v-1.974h0.621
      l1.093,1.974h1.031L562.484,491.7z M561.013,491.108v-1.346h0.769c0.445,0,0.945,0.127,0.945,0.644
      c0,0.572-0.553,0.702-1.051,0.702H561.013z"/>
  </g>
</svg>

   <img src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/avis-white-logo.png" alt="Avis car hire" width="115" height="32" />
  </span>
</a>
            </div>
            <a class="back closeOverlay" href="#button"><i aria-hidden="true" data-icon="&#xe002;"></i> <span>Fermer</span></a>
          <% if(vehicle.vehicleBrand=="avis"){ %>
        <div class="vehicle-details-avis-logo"></div>
      <% } else if(vehicle.vehicleBrand=="budget"){ %>
        <div class="vehicle-details-budget-logo"></div>
      <% } %>
        </div>
    <% } %>
    
   <!-- /Car image -->

   <div class="vehicle-information">

    <div class="car-info-heading-container">

         <% if (vehicle.promotion) { %>
            <!-- Promo message -->
            <div class="car-result-promo">
                <p><em><%= vehicle.promotion.offer %></em>
                    <% if (vehicle.promotion.details) { %>
                        <%= vehicle.promotion.details %>
                    <% } %>
                </p>
            </div>
            <!-- /Promo message -->
        <% } %>

        <div class="car-info-heading ">


            </h2>
            <!-- /Category name and details -->

            <!-- Pricing -->
            <!--<p class="price">
                <%= passedPrice %>
            </p>-->
            <!-- /Pricing -->
            
            <!-- PNPL changes -->
            <div class="PNPL">
               <%= passedPrice %>
            </div>
            
            
            <!-- /PNPL changes -->
     
            <!-- /Choose car CTA -->
        </div>
    </div>


<div class="details-tab-row-wrapper">
    

<div class="tab-row">

    

    <% if (vehicle.select && vehicle.fuelEconomy) { %>
    <div class="info-box">
      <h2>Économie de carburant</h2>

        <ul class="contextual-help">
            <li>
                <em><%= vehicle.fuelEconomy %></em>
            </li>
        </ul>

    </div>
    <% } %>

    <% if (vehicle.driverRequirements) { %>
    <div class="info-box">
      <h2>À savoir</h2>

        <ul class="contextual-help">
        <% if (vehicle.vehicleBrand === "avis") { %>
      <%_.each( vehicle.driverRequirements, function( requirements ){%>
             <% if (requirements.policy) { %>
          <li><a class="contextual-toggle" href="#"> <span><em><%= requirements.policy %></em></span>
              <i aria-hidden="true">?</i> <b class="is-visually-hidden">toggle
                for more information</b>
          </a>
            <div class="details">
              <p><%= requirements.details %></p>
            </div></li>
          <% } %>
        <%});%>
        <% }else { %>
          <li><p>You will need to bring a full Driving Licence and at least one Credit Card to hire this vehicle. There is also a minimum-age requirement. Exact requirements can be found in our �Location Specific Conditions� � follow the site�s Terms and Conditions links to find them.</p></li>
    <% } %>
        </ul>

    </div>
    <% } %>

    
</div>
</div>
</div>
</div>
</script><script>
   ABG.carData =[{"vehicleID":0,"promotion":null,"select":false,"type":"Petite","example":"A Hyundai i10 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":2,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Essence","fuelTypeId":"1","vehFeaturesMap":{},"fuelIcon":null},"priceIncludes":null,"priceExcludes":null,"features":["Lecteur-CD","Petrol","Ceintures de sécurite arrières","Direction assistée","Radio","Vitres électriques","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"MDMR","group":"A","model":"Hyundai i10","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Hyundai i10","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Hyundai i10"],"additionalInfo":null},"isEligible":true},{"vehicleID":1,"promotion":null,"select":false,"type":"Petite","example":"B Peugeot 208 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Peugeot/208/peugeot_16208allure5ha1fb_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Peugeot/208/peugeot_16208allure5ha1fb_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Peugeot/208/peugeot_16208allure5ha1fb_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Peugeot/208/peugeot_16208allure5ha1fb_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":2,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Essence","fuelTypeId":"1","vehFeaturesMap":{},"fuelIcon":null},"priceIncludes":null,"priceExcludes":null,"features":["Radio","Air Bag (Conducteur/Passager)","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"EDMR","group":"B","model":"Peugeot 208","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Peugeot 208","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Peugeot 208"],"additionalInfo":null},"isEligible":true},{"vehicleID":2,"promotion":null,"select":false,"type":"Petite","example":"C Dacia Logan Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Dacia/Logan/dacia_13logansa_2b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Dacia/Logan/dacia_13logansa_2b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Dacia/Logan/dacia_13logansa_2b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Dacia/Logan/dacia_13logansa_2b_sideview.png"}],"specifications":{"doors":4,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Essence/Diesel","fuelTypeId":"3","vehFeaturesMap":{},"fuelIcon":null},"priceIncludes":null,"priceExcludes":null,"features":["Climatisation","Radio","Air Bag (Conducteur/Passager)"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"ECMR","group":"C","model":"Dacia Logan","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Dacia Logan","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Dacia Logan"],"additionalInfo":null},"isEligible":true},{"vehicleID":3,"promotion":null,"select":false,"type":"Moyenne","example":"K Dacia Dokker Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Dacia/Dokker/dacia_15dokkerstepwaymp1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Dacia/Dokker/dacia_15dokkerstepwaymp1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Dacia/Dokker/dacia_15dokkerstepwaymp1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Dacia/Dokker/dacia_15dokkerstepwaymp1b_sideview.png"}],"specifications":{"doors":4,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Radio","Air Bag (Conducteur/Passager)","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"CDMR","group":"K","model":"Dacia Dokker","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Dacia Dokker","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Dacia Dokker"],"additionalInfo":null},"isEligible":true},{"vehicleID":4,"promotion":null,"select":false,"type":"Petite","example":"D Renault Clio 4 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Renault/Clio/renault_17cliointens5ha4fb_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Renault/Clio/renault_17cliointens5ha4fb_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Renault/Clio/renault_17cliointens5ha4fb_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Renault/Clio/renault_17cliointens5ha4fb_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":2,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Radio","Climatisation","Air Bag (Conducteur/Passager)"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"EDMD","group":"D","model":"Renault Clio 4","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Renault Clio 4","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Renault Clio 4"],"additionalInfo":null},"isEligible":true},{"vehicleID":5,"promotion":null,"select":false,"type":"Petite","example":"H Hyundai i10 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Hyundai/i10/hyundai_11i10hb5_1b_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":2,"transmission":"Automatic","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Essence","fuelTypeId":"1","vehFeaturesMap":{},"fuelIcon":null},"priceIncludes":null,"priceExcludes":null,"features":["Climatisation","Air Bag (Conducteur/Passager)","Radio"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"MDAR","group":"H","model":"Hyundai i10","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Hyundai i10","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Hyundai i10"],"additionalInfo":null},"isEligible":true},{"vehicleID":6,"promotion":null,"select":false,"type":"Moyenne","example":"I Renault Megane Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Renault/Megane/renault_16megane_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Renault/Megane/renault_16megane_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Renault/Megane/renault_16megane_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Renault/Megane/renault_16megane_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Vitres électriques","Direction assistée","Empattement Court","Climatisation","Contrôle climatisation","Lecteur-CD"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"CCMR","group":"I","model":"Renault Megane","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Renault Megane","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Renault Megane"],"additionalInfo":null},"isEligible":true},{"vehicleID":7,"promotion":null,"select":false,"type":"Moyenne","example":"O Volkswagen Golf 7 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/VW/Golf/vw_15golf5d_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/VW/Golf/vw_15golf5d_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/VW/Golf/vw_15golf5d_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/VW/Golf/vw_15golf5d_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Radio","Air Bag (Conducteur/Passager)","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"CDMD","group":"O","model":"Volkswagen Golf 7","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Volkswagen Golf 7","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Volkswagen Golf 7"],"additionalInfo":null},"isEligible":true},{"vehicleID":8,"promotion":null,"select":false,"type":"Moyenne","example":"E Peugeot 2008 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Peugeot/2008/peugeot_132008hb5_1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Peugeot/2008/peugeot_132008hb5_1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Peugeot/2008/peugeot_132008hb5_1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Peugeot/2008/peugeot_132008hb5_1b_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Climatisation","Radio"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"CFMR","group":"E","model":"Peugeot 2008","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Peugeot 2008","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Peugeot 2008"],"additionalInfo":null},"isEligible":true},{"vehicleID":9,"promotion":null,"select":false,"type":"Moyenne","example":"F Peugeot 508 Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Peugeot/508/peugeot_15508gtsa1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Peugeot/508/peugeot_15508gtsa1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Peugeot/508/peugeot_15508gtsa1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Peugeot/508/peugeot_15508gtsa1b_sideview.png"}],"specifications":{"doors":4,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Lecteur-CD","Climatisation","Radio"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"SCMR","group":"F","model":"Peugeot 508","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Peugeot 508","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Peugeot 508"],"additionalInfo":null},"isEligible":true},{"vehicleID":10,"promotion":null,"select":false,"type":"Moyenne","example":"J Dacia Duster Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Dacia/Duster/dacia_12dustersuv_1b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Dacia/Duster/dacia_12dustersuv_1b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Dacia/Duster/dacia_12dustersuv_1b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Dacia/Duster/dacia_12dustersuv_1b_sideview.png"}],"specifications":{"doors":5,"seats":5,"bags":3,"transmission":"Manual","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Lecteur-CD","Radio","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"IFMR","group":"J","model":"Dacia Duster","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Dacia Duster","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Dacia Duster"],"additionalInfo":null},"isEligible":true},{"vehicleID":11,"promotion":null,"select":false,"type":"Moyenne","example":"L Volkswagen Jetta Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/VW/Jetta/volkswagen_12jettasedan_6b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/VW/Jetta/volkswagen_12jettasedan_6b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/VW/Jetta/volkswagen_12jettasedan_6b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/VW/Jetta/volkswagen_12jettasedan_6b_sideview.png"}],"specifications":{"doors":4,"seats":5,"bags":3,"transmission":"Automatic","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Radio","Air Bag (Conducteur/Passager)","Climatisation"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"IDAR","group":"L","model":"Volkswagen Jetta","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Volkswagen Jetta","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Volkswagen Jetta"],"additionalInfo":null},"isEligible":true},{"vehicleID":12,"promotion":null,"select":false,"type":"Moyenne","example":"N Volkswagen Passat Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/VW/Passat/volkswagen_16passatselsa7a_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/VW/Passat/volkswagen_16passatselsa7a_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/VW/Passat/volkswagen_16passatselsa7a_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/VW/Passat/volkswagen_16passatselsa7a_sideview.png"}],"specifications":{"doors":4,"seats":5,"bags":3,"transmission":"Automatic","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Climatisation","Air Bag (Conducteur/Passager)","Radio"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"SDAR","group":"N","model":"Volkswagen Passat","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Volkswagen Passat","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Volkswagen Passat"],"additionalInfo":null},"isEligible":true},{"vehicleID":13,"promotion":null,"select":false,"type":"Moyenne","example":"G Hyundai Santa Fe Unknown","images":[{"small":"/.imaging/vehicleDetails_small/dms/avis/fleet/Hyundai/Santa-Fe/hyundai_13santafesuv_3b_sideview.png","large":"/.imaging/vehicleDetails_large/dms/avis/fleet/Hyundai/Santa-Fe/hyundai_13santafesuv_3b_sideview.png","small-retina":"/.imaging/vehicleDetails_small_retina/dms/avis/fleet/Hyundai/Santa-Fe/hyundai_13santafesuv_3b_sideview.png","large-retina":"/.imaging/vehicleDetails_large_retina/dms/avis/fleet/Hyundai/Santa-Fe/hyundai_13santafesuv_3b_sideview.png"}],"specifications":{"doors":5,"seats":7,"bags":3,"transmission":"Automatic","capacity":null,"capacityUnit":null,"airCon":true,"fuelType":"Diesel","fuelTypeId":"2","vehFeaturesMap":{},"fuelIcon":"&#xe009"},"priceIncludes":null,"priceExcludes":null,"features":["Air Bag (Conducteur/Passager)","Climatisation","Radio"],"fuelEconomy":null,"onRequest":null,"vendorCarType":"SFAR","group":"G","model":"Hyundai Santa Fe","damageAmt":null,"theftAmt":null,"similar":false,"vehTypeText":"Hyundai Santa Fe","budgetImageUrl":null,"vehicleBrand":"avis","hasCoverages":false,"driverRequirements":[{"policy":"Âge minimum 25","details":"Vous devez être âgé de 25 ans minimum.. "},{"policy":"1 carte de paiement","details":"Merci de fournir une carte de paiement pour louer ce véhicule. Avis accepte les cartes American Express, Eurocard/MasterCard, Visa, Discover et Diners Club. Une pré-autorisation de prélèvement sera présentée sur la carte de paiement utilisée au moment de la location."},{"policy":"Permis de conduire","details":"Vous devez être en possession d’un permis de conduire valide depuis au moins 24 <b>MOIS</b>."}],"similarVehiclesList":{"similarVehicles":["Hyundai Santa Fe"],"additionalInfo":null},"isEligible":true}]    
</script></div><script class="template-form-error" type="text/template">
    <div class="form-error <%= error.direction %>">
        <i class="large" data-icon="&#xe094;"></i>
        <div class="msg">
            <p role="alert">
                <em><%= error.message %></em>
                 <%= error.supporting %>
            </p>
        </div>
    </div>
</script>     </div>
      <div id="live-person-button"></div>
      <style>
        div#live-person-button { position: fixed; top: 124px; left: 0px; z-index: 2000;}
      </style>
    </div>
  </div>




<div class="loader-bck"></div>
<div class="loaderOverlay">
  <span>\</span>
</div>


<div id="timer-overlay"></div> <!-- Timer Overlay div -->
<div class="review-and-pay">
<!-- Timer will expire in <n> min Container --> 
    <div class="expirePopUp" id="expire">
        <div class="expire-header clearfix">
            <span class="expire-text">Votre session va expirer. Souhaitez-vous continuer ?</span>
            <div class="img" data-value="continue" >
                <img class="imgtag" data-value="continue" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/close.png" 
                  alt="Fermer la session devant expirer" title="Close" width="100%" height="100%">
            </div>
        </div>
        <div class="expire-body clearfix">
      <p class="expire-text">Il semble que vous soyez déjà parti(e). Cette page expirera dans  
      <span class="red">5 </span>minutes.</p>
          <p class="expire-text">Si vous souhaitez continuer plutôt que de recommencer, veuillez cliquer sur le bouton ci-dessous.</p>
      <button class="button-primary" data-value="continue" type="button" value="continuer">
        continuer<i data-icon="&#xe004;"></i>
      </button>
  </div>
    </div>
  
  <!-- Timer expired -->
    <div class="expirePopUp" id="expired">
        <div class="expire-header clearfix">
            <span class="expire-text">Nous sommes désolés, votre session a expiré. Veuillez retourner sur la page d’accueil pour continuer.</span>
            <div class="img" data-value="home">
                 <img class="imgtag" data-value="home" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/close.png" 
                  alt="Fermer la session devant expirer" title="Close" width="100%" height="100%">
            </div>
        </div>
        <div class="expire-body clearfix">
           <p class="expire-text">Nous sommes désolés, votre session a été interrompue due à une période d’inactivité trop longue.</p>
              <p class="expire-text">Veuillez cliquer sur le bouton ci-dessous afin de retourner sur notre page d’accueil.</p>
      <button class="button-primary" data-value="home" type="button" value="accueil">
        accueil <i data-icon="&#xe004;"></i>
      </button>
    </div>
    </div>
  
  <!-- D & C PopPup -->
    <div class="d-n-c-popup" id="d-n-c-popup">
        
        <div class="expire-body clearfix">
           <p class="expire-text">Sorry, no cars from your chosen group are available for the location. Would you like to stick with this location?</p>
        <a href="#" class="button-secondary">
              No<i data-icon="&#xe004;"></i>
      </a>
        <button class="button-primary" data-target-url="https://secure.avis.ma/resultats-vehicule" data-value="continue" type="button" value="continue">
          Yes<i data-icon="&#xe004;"></i>
        </button>
    </div>
    </div>
  <!-- D & C PopPup -->
    
    <!-- Clear Changes Start-->
    <div class="clearPopUp" id="clearChangePopup">
        <div class="expire-header clearfix">
          <span class="expire-text">Que souhaitez-vous faire ?</span>
            <div class="img" data-value="home">
                 <img class="imgtag" data-value="home" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/close.png" 
                   alt="Close clear changes popup" title="Close" width="100%" height="100%">
            </div>
        </div>
        <div class="expire-body clearfix">
              <p class="expire-text">Êtes-vous certain(e) de ne pas sauvegarder vos dernières modifications ?</p>
      <div class="yesno-container clearfix">
        <a href="https://secure.avis.ma/votre-reservation?InputBookingNumber=&InputSurname=&InputEmailAddress=" class="clearyes-btn button-primary" data-target-url="" data-value="continue">
         Oui<i data-icon="&#xe004;"></i>
        </a>
        <a href="#" class="clearno-btn button-secondary">
         Poursuivre la réservation<i data-icon="&#xe004;"></i>
        </a>
        
        
      </div>
    </div>
    </div><!-- Clear Changes End-->
<!-- terms and condition popup  starts -->
  <div class="pdfPopUp" id="termsPdfPopup" >
        <div class="expire-header clearfix">
          <span class="expire-text">Quelle condition générale souhaitez-vous afficher ? <span><br/></span>  Faites votre choix</span>
            <div class="img" data-value="">
                 <img class="imgtag" data-value="" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/close.png" alt="Close terms & conditions popup" title="Close" width="100%" height="100%">
            </div>
        </div>
        <div class="expire-body clearfix">
            <div class="list">
      <!--Loop below html -->
        <div class="pdf-block" >
          <a target="_blank" href="https://docs.abgcarrental.com/booking/avis/MA/fr/">          
            <img alt="pdf-icon" width="33px" height="41px" title="View/Download PDF" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/pdficon.png"/>
          <!--MA--> Conditions de Réservation
            <i aria-hidden="true" data-icon="&#xe004;"></i>
          </a>
          </div>
        <div class="pdf-block" >
          <a target="_blank" href="https://docs.abgcarrental.com/rental/avis/MA/fr/?rentalCountry=MA" >         
            <img alt="pdf-icon" width="33px" height="41px" title="View/Download PDF" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/pdficon.png"/>
            <!--MA--> Exemple de Conditions Générales de Location
            <i aria-hidden="true" data-icon="&#xe004;"></i>
          </a>
          </div>
          <div class="pdf-block" >                
          <a target="_blank" href="https://docs.abgcarrental.com/location/avis/MA/MA/fr/" >         
            <img alt="pdf-icon" width="33px" height="41px" title="View/Download PDF" src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/pdficon.png"/>
            <!--MA-->Conditions spécifiques du lieu de location
            <i aria-hidden="true" data-icon="&#xe004;"></i>
          </a>
        </div>
        
      <!--Loop ends --> 
      </div>
      <div class="infoview">
        <p>Sélectionner un document à visualiser ou à télécharger </p>
        <span class="terms-q">?
          <span class="terms-q-info"><b>Conditions de réservations</b> son los términos en los que se hace la reserva e incluyen, por ejemplo, información sobre cuando el cliente no se presenta, cancelaciones o los documentos que se necesitan cuando se va a recoger el vehículo. <b>Las Condiciones Específicas del Destino</b> se refieren a aquellas del país o de las oficinas de alquiler desde donde se alquila el vehículo e incluyen, entre otros, requisitos sobre edad de los conductores. <b>Las Condiciones Generales de Alquiler</b>  son los términos bajo los que se alquila el vehículo e incluyen, por ejemplo, las responsabilidades de Avis y las responsabilidades del cliente.</span>
        </span>
      </div>
    </div>
    </div>
  <!-- terms and condition popup  ends -->


     <script src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/js/app.js?v=2.9.23" type="text/javascript"></script>


<script>(function () { var v = 1550148529 * 3.1415926535898; v = Math.floor(v); document.cookie = "__zjc9496="+v+"; expires=Thu, 14 Feb 2019 12:50:18 UTC; path=/"; })()</script>



<div class="booking-header">
    <div class="your-avis nav-link">
          <a  class="toggle" data-toggle-id="your-avis" id="your-avis-tab" role="link" aria-controls="your-avis" data-open-message="Tab Open">
           <span class="hidden-narrow">Connexion </span>
            <span class="is-visually-hidden accessible-assist">Expand for more information</span>
            <i data-icon="&#xe00c;"></i>
        </a>
    </div>
 
  
   <div class="booking-progress-bar">
      <p class="is-visually-hidden">Vous êtes actuellement à l’étape 1 sur 4 : choisir un véhicule </p>
      <div class="progress-bar-container">
        <ol class="progress-bar">
           
          <li class="is-active" >
      
            
              <span class="position">Sélection du véhicule</span>
          </li>
           
          <li class="" >
              <span aria-hidden="true" class="bullets">
              <span></span><span></span><span></span>
            </span>
      
            
              <span class="position">Les options</span>
          </li>
           
          <li class="" >
              <span aria-hidden="true" class="bullets">
              <span></span><span></span><span></span>
            </span>
      
            
              <span class="position">CONFIRMATION ET PAIEMENT</span>
          </li>
      </ol>
      </div>
    <form action='#' method="post" id="bookingNavForm">
      <input type="hidden" name="popupShown" id="popupShown" value="NO"/>     
      <input type="hidden" name="coverNavIndicator" value="false-false"/>
      <input type="hidden" name="fccRecg" id="fccRecg" value="false">
      <input type="hidden" name="driverDob" id="driverDob" value="">
       <input type="hidden" name="isUasorSds" id="isUasorSds" value="">
      <input type="hidden" name="bookingStep" value="1"/>
      <input type="hidden" name="reqNum" value="3"/>
      <input type="hidden"  name="backFlow" id="backFlow" value="false"/>
      <input type="hidden" name="pickupDateTime" id="pickupDateTime" value="201902151000"/>
      <input type="hidden" name="pickupLocation" id="pickupLocation" value="CSS"/>
      <input type="hidden" name="returnDateTime" id="returnDateTime" value="201902171000"/>
      <input type="hidden" name="returnLocation" id="returnLocation" value="CSS"/>
      <input type="hidden" name="paymentIndicator" id="paymentIndicator" value=""/>
      <input type="hidden" name="awdcode" id="awdcode" value=""/>
      <input type="hidden" name="hiddenDob" id="hiddenDob" value=""/>
    </form>
  </div>
</div>



@endsection

        @section('footer')
            @include('inc.footer')

        @endsection













