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
  </nav>     
</div>    </div>   
  </div>
</div>


<!-- End Desktop Inspiration Module -->

<div class="row full">
  <div class="content-top-pane">   
  

<div class="content-51a-text intro-1-1 intro-txt" cms:edit>
   <div class="spotlight-feature-text">
        <h2>Notre gamme de véhicules de location </h2>
        <span class="changeFontSize">De toutes tailles (citadine, compacte, berline etc.) et pour tous vos trajets, voyage en couple, en famille, en groupe ou professionnel, Avis dispose d&rsquo;un large &eacute;ventail de v&eacute;hicules de location pour vous accompagner quelque soit votre besoin. Nous vous proposons &eacute;galement &agrave; la location des 4x4 et des v&eacute;hicules utilitaires. La location de voiture au Maroc est facile et accessible gr&acirc;ce &agrave; Avis.<br /> <br /> Venez d&egrave;s &agrave; pr&eacute;sent d&eacute;couvrir notre flotte automobile et faire votre choix !<br /> <br /> NB: L'utilisation des v&eacute;hicules de location en dehors du pays n'est pas autoris&eacute;e.</span>
   </div>
</div>
</div>
</div>






<div class="row full">
   <div class="extras-accordion flexible-content-accordion active">
    <div class="extras-list">
    </div>
   </div>
</div>  

 <div class="row full homepage-promos">  

 
    

 @foreach($type as $tp)
<!-- begin M.D.28 Promo module -->
<div class="col">
    <div class="promo-container">

  <a href="https://www.avis.ma/voiture-de-location-maroc/voiture-compacte" > <img  alt="location voiture compacte au maroc"
      src="https://avisassets.abgemea.com/.imaging/avisPromoLarge/dms/DMS/local/FR/fleet/select/promo/select-a1-taillight-promo.jpg"
      class="responsive-image"
      data-small="https://avisassets.abgemea.com/.imaging/avisPromoSmall/dms/DMS/local/FR/fleet/select/promo/select-a1-taillight-promo.jpg"
  data-small-retina="https://avisassets.abgemea.com/.imaging/avisPromoSmallRetina/dms/DMS/local/FR/fleet/select/promo/select-a1-taillight-promo.jpg"
  data-large="https://avisassets.abgemea.com/.imaging/avisPromoLarge/dms/DMS/local/FR/fleet/select/promo/select-a1-taillight-promo.jpg"
  data-large-retina="https://avisassets.abgemea.com/.imaging/avisPromoLargeRetina/dms/DMS/local/FR/fleet/select/promo/select-a1-taillight-promo.jpg"></a>
      <div class="promo-main-content">

        <h2>Les voitures de location {{$tp->type}}</h2>
        <p><p>De taille idéale pour professionnels ou couples, choisissez la compacte adaptée à votre besoin de location de voiture.&nbsp;</p></p>
      </div>
       <div class="promo-secondary-content">
        <a href="https://www.avis.ma/voiture-de-location-maroc/voiture-compacte"> <span class="link-content">Je découvre</span>
          <span class="accessibility-content"></span>
          <i data-icon="&#xe004;" aria-hidden="true"></i>
        </a>
       </div>

    </div>
</div>
 @endforeach

  <!-- <div class="promo-main-content">
        <h2>Venez découvrir nos voitures de tourisme  </h2>
        <p><p>Citadine&nbsp;ou voiture haut de gamme, roulez avec la voiture de location qui vous convient&nbsp;</p></p>
      </div>

<div class="promo-main-content">
        <h2>Voyagez avec nos véhicules spacieux</h2>
        <p><p>Une berline pour les professionnels, une voiture de location grande taille pour les familles, découvrez nos modèles.</p></p>
      </div>
 
<div class="promo-main-content">
        <h2>Louez un véhicule utilitaire avec Avis</h2>
        <p><p>Avis vous propose deux véhicules utilitaires, Renault Kangoo et Dacia Dokker, à vous de choisir !</p></p>
      </div>


 <div class="promo-main-content">
        <h2>Prenez la route avec un 4x4 de location</h2>
        <p><p>Laissez-vous tenter par nos 4x4, faciles à conduire et adaptés à tous terrains, pour votre location de voiture au Maroc.</p></p>
      </div>

    
<div class="promo-main-content">
        <h2>Toutes nos voitures d&#039;occasion</h2>
        <p><p>Avis propose de nombreuses voitures d'occasion à la vente pour les professionnels et les particuliers. Toutes sont en parfait état.</p></p>
      </div>
 
 </div> -->
</div><div class="content-info-panes breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
      


  <div>
   <a href="https://www.avis.ma/" itemprop="url">
      <span itemprop="title">Accueil</span></a>
    <i data-icon="&#xe004;" aria-hidden="true"></i>
  </div>
      


  <div>
   <a href="https://www.avis.ma/voiture-de-location-maroc" itemprop="url">
      <span itemprop="title">Voitures de location</span></a>
    <i data-icon="&#xe004;" aria-hidden="true"></i>
  </div>
   <div>
      <span itemprop="title">Gamme de véhicules de location</span>
  </div>  
</div>

@endsection

        @section('footer')
            @include('inc.footer')

        @endsection