   @extends('layout')

@section('head')
    @include('inc.head',['title'=>'accueil'])
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



<div class="location-headline dark-background">
  <span class="responsive-background" src="https://avisassets.abgemea.com/.imaging/inspirationLargeRetina/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-small="https://avisassets.abgemea.com/.imaging/inspirationSmall/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-small-retina="https://avisassets.abgemea.com/.imaging/inspirationSmallRetina/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-medium="https://avisassets.abgemea.com/.imaging/inspirationMedium/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-medium-retina="https://avisassets.abgemea.com/.imaging/inspirationMediumRetina/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-large="https://avisassets.abgemea.com/.imaging/inspirationLarge/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg"
  data-large-retina="https://avisassets.abgemea.com/.imaging/inspirationLargeRetina/dms/DMS/global/homepage/inspirational/red-mercedes-inspirational.jpg">
  </span>  
  <h1>Location de voiture Casablanca</h1>   
  
  <div class="location-details-wrapper">
    <div class="location-details-actions">
      <span class="itinerary-station-name">Location de voiture Casablanca</span>


      <a href="#" id="branchLocationLoad" class="js-car-search-location is-cs-active" data-ajax-url="/location-voiture-maroc/agences-centre-ville/location-voiture-casablanca/main/inspiration/0/flexibleInpiration/0?locationDetails=true">
        Book a car from this location
        <span class="book-link"></span>
      </a>
    </div>
  </div>
  <div id="car-search-target" class="is-cs-open">
    <div class="car-search-wrapper">
<input type="hidden" value="" id="errorType">

   <input type="hidden" id="loadMapForLocPage" value="true">
<input type="hidden" id="locCode" name="locCode" value="CSS"/>
<input type="hidden" id="jcrloc" name="jcrloc" value="20000"/>
<input type="hidden" id="locsuggestion" name="locsuggestion" value="Agence Casablanca  "/>
<input type="hidden" id="isproxy" name="isproxy" value=""/>
<input type="hidden" id="isLocModule" name="isLocModule" value="true"/>
<form action="https://secure.avis.ma/resultats-vehicule" method="get" class="car-rental-search js-car-search" id="getAQuote" autocomplete="off">
  <input type="hidden" id="mock" name="hire-country" value="GB" />
  <div id="car-search-instructions" class="is-visually-hidden" aria-live="polite" >
    <h2>
      Instructions for Screen Reader Users:
    </h2>
    
    <a href="#hire-search">
      Skip screen reader instructions
    </a>
    
    <p>
      Indiquez lâ€™agence oÃ¹ vous voulez prendre votre vÃ©hicule Ã  lâ€™aide du formulaire de recherche ci-dessous. 
    </p>
    <p>
       Veuillez indiquer ensuite vos dates de dÃ©part et de retour. 
    </p>
    <p>
       Vous pouvez Ã©galement indiquer votre numÃ©ro AWD (Remise internationale Avis). Vous pouvez rÃ©server un vÃ©hicule utilitaire ou un scooter si ceux-ci sont disponibles dans votre agence.
    </p>
    
  </div>
  
  <h3 class="is-visually-hidden">
    Ignorer les liens contenus dans ce formulaire
  </h3>
  
  <ul class="skiplinks" id="car-search-skip-links">
    <li>
      <a href="#hire-search">
        Passer directement Ã  la recherche de vÃ©hicule
      </a>
    </li>
    <li>
      <a href="#pick-up-date-button">
       Passer directement au bouton de sÃ©lection de la date de dÃ©part 
      </a>
    </li>
    <li>
      <a href="#pick-up-time-button">
       Passer directement au bouton de sÃ©lection de lâ€™heure de dÃ©part 
      </a>
    </li>
    <li>
      <a href="#drop-off-date-button">
      Passer directement au bouton de sÃ©lection de la date de retour 
      </a>
    </li>
    <li>
      <a href="#drop-off-time-button">
       Passer directement au bouton de sÃ©lection de lâ€™heure de retour 
      </a>
    </li>
    <li>
      <a href="#form-end">
        Passer directement Ã  la sÃ©lection dâ€™une autre agence
      </a>
    </li>
    <li>
      <a href="#car-search-submission">
      Passer directement Ã  lâ€™envoi du formulaire
      </a>
    </li>
  </ul>
  
<span class="hire-container">
  <!--  Search Bar -->
  <span class="hire-location-bar car-rental-search-bar" data-disabledspan ="false" >
  
  <label for="hire-search" class="is-visually-hidden">
      Rechercher une agence
    </label>
    <input id="hire-search" data-station-select="" data-disabledspan ="false" name="hire-search" class="js-lookahead required" placeholder="Commencez votre voyage Ã  partir de ... " maxlength="250" autocomplete="off" value=""/>
    <a class="locate-me-icon" href="#" data-lang-value="Current location" data-lang-fail="Your device could not find your location">
      <i aria-hidden="true" data-icon="&#xe018;"></i>Utilisez votre emplacement
    </a>
    <input id="hire-location" name="hire-location" value="CSS" type="hidden" class="js-lookahead-selected-value required"/>
  </span>
    <span class="date-field">
      
      <!-- date selection -->
      <label for="date-from">
        date de dÃ©but
      </label>
      <a href="#set-pick-up-date" class="set-date-time-button set-from-date" id="pick-up-date-button">
        <span class="is-visually-hidden">
          La date de dÃ©part choisie est le
        </span>
        <span class="day">
          &nbsp;
        </span>
        <span class="smalls">
          <abbr class="weekday">
            &nbsp;
          </abbr>
          <abbr class="month">
            &nbsp;
          </abbr>
        </span>
        <span class="is-visually-hidden">
          choisir de modifier
        </span>
      </a>
      <input id="date-from" name="date-from" class="js-date-picker" type="text" >
      <!-- /date selection -->
      
      <!-- time selection -->
      <a href="#set-from-time" class="set-date-time-button set-from-time" id="pick-up-time-button">
        <span class="is-visually-hidden">
          Lâ€™heure de dÃ©part choisie est 
        </span>
        <span class="hour">
          &nbsp;
        </span>
        <span class="minute">
          &nbsp;
        </span>
        <span class="is-visually-hidden">
           choisir de modifier
        </span>
      </a>
      
      <label for="time-from-hours">
        temps depuis (minutes)
      </label>
    
      <select id="time-from-hours" name="time-from-hours" class="js-time-picker">
        <!-- data-time & data-display used to caculate opening time and display time respectfully, please retain the formula -->
       
     <option  value="00" data-time="00" data-display="00">
          00
        </option>
     <option  value="01" data-time="01" data-display="01">
          01
        </option>
     <option  value="02" data-time="02" data-display="02">
          02
        </option>
     <option  value="03" data-time="03" data-display="03">
          03
        </option>
     <option  value="04" data-time="04" data-display="04">
          04
        </option>
     <option  value="05" data-time="05" data-display="05">
          05
        </option>
     <option  value="06" data-time="06" data-display="06">
          06
        </option>
     <option  value="07" data-time="07" data-display="07">
          07
        </option>
     <option  value="08" data-time="08" data-display="08">
          08
        </option>
     <option  value="09" data-time="09" data-display="09">
          09
        </option>
     <option selected value="10" data-time="10" data-display="10">
          10
        </option>
     <option  value="11" data-time="11" data-display="11">
          11
        </option>
     <option  value="12" data-time="12" data-display="12">
          12
        </option>
     <option  value="13" data-time="13" data-display="13">
          13
        </option>
     <option  value="14" data-time="14" data-display="14">
          14
        </option>
     <option  value="15" data-time="15" data-display="15">
          15
        </option>
     <option  value="16" data-time="16" data-display="16">
          16
        </option>
     <option  value="17" data-time="17" data-display="17">
          17
        </option>
     <option  value="18" data-time="18" data-display="18">
          18
        </option>
     <option  value="19" data-time="19" data-display="19">
          19
        </option>
     <option  value="20" data-time="20" data-display="20">
          20
        </option>
     <option  value="21" data-time="21" data-display="21">
          21
        </option>
     <option  value="22" data-time="22" data-display="22">
          22
        </option>
     <option  value="23" data-time="23" data-display="23">
          23
        </option>
               
      </select>
      
      <label for="time-from-minutes">
       temps depuis (heures)
      </label>
      <select id="time-from-minutes" name="time-from-minutes" class="js-time-picker">
        <!-- data-time & data-display used to caculate opening time and display time respectfully, please retain the formula -->
        <option selected value="00" data-time="00" data-display="00">
          00
        </option>
        <option  value="15" data-time="15" data-display="15">
          15
        </option>
        <option  value="30" data-time="30" data-display="30">
          30
        </option>
        <option  value="45" data-time="45" data-display="45">
          45
        </option>
        
      </select>
      
      <input id="time-from" name="time-from" type="hidden"  value="">
      <!-- /time selection -->
      
    </span></span>

<span class="date-field-joiner">To</span>

<span class="return-container">
  <span class="return-location-bar car-rental-search-bar" data-disabledspan ="false">
      <label for="return-search" class="is-visually-hidden">
          Choisir une agence de retour
        </label>
        <input data-station-select="" id="return-search" data-disabledspan ="false" name="return-search" class="js-lookahead required" placeholder="Choisir une agence de retour" maxlength="250" value=""/>
        <a class="locate-me-icon" href="#" data-lang-value="Current location" data-lang-fail="Your device could not find your location">
          <i aria-hidden="true" data-icon="&#xe018;"></i>Utilisez votre emplacement
        </a>
    <input id="return-location" name="return-location" type="hidden" class="js-lookahead-selected-value"/>
    </span>
 <span class="date-field">
      
      <!-- date selection -->
      <label for="date-to">
        date de fin
      </label>
      <a href="#set-drop-off-date" class="set-date-time-button set-to-date" id="drop-off-date-button">
        <span class="is-visually-hidden">
          Actuel 
        </span>
        <span class="day">
          &nbsp;
        </span>
        <span class="smalls">
          <abbr class="weekday">
            &nbsp;
          </abbr>
          <abbr class="month">
            &nbsp;
          </abbr>
        </span>
        <span class="is-visually-hidden">
           choisir de modifier
        </span>
      </a>
      
      <input id="date-to" name="date-to" class="js-date-picker" type="text" >
      <!-- / date selection -->
      
      <!-- time selection -->
      <a href="#set-to-time" class="set-date-time-button set-to-time" id="drop-off-time-button">
        <span class="is-visually-hidden">
           Lâ€™heure de dÃ©part choisie est 
        </span>
        <span class="hour">
          &nbsp;
        </span>
        <span class="minute">
          &nbsp;
        </span>
        <span class="is-visually-hidden">
           choisir de modifier
        </span>
      </a>
      
      <label for="time-to-hours">
         temps jusquâ€™Ã  (heures)
      </label>
      <select id="time-to-hours" name="time-to-hours" class="js-time-picker">
        <!-- data-time & data-display used to caculate opening time and display time respectfully, please retain the formula -->
      <option  value="00" data-time="00" data-display="00">
        00
      </option>
      <option  value="01" data-time="01" data-display="01">
        01
      </option>
      <option  value="02" data-time="02" data-display="02">
        02
      </option>
      <option  value="03" data-time="03" data-display="03">
        03
      </option>
      <option  value="04" data-time="04" data-display="04">
        04
      </option>
      <option  value="05" data-time="05" data-display="05">
        05
      </option>
      <option  value="06" data-time="06" data-display="06">
        06
      </option>
      <option  value="07" data-time="07" data-display="07">
        07
      </option>
      <option  value="08" data-time="08" data-display="08">
        08
      </option>
      <option  value="09" data-time="09" data-display="09">
        09
      </option>
      <option selected value="10" data-time="10" data-display="10">
        10
      </option>
      <option  value="11" data-time="11" data-display="11">
        11
      </option>
      <option  value="12" data-time="12" data-display="12">
        12
      </option>
      <option  value="13" data-time="13" data-display="13">
        13
      </option>
      <option  value="14" data-time="14" data-display="14">
        14
      </option>
      <option  value="15" data-time="15" data-display="15">
        15
      </option>
      <option  value="16" data-time="16" data-display="16">
        16
      </option>
      <option  value="17" data-time="17" data-display="17">
        17
      </option>
      <option  value="18" data-time="18" data-display="18">
        18
      </option>
      <option  value="19" data-time="19" data-display="19">
        19
      </option>
      <option  value="20" data-time="20" data-display="20">
        20
      </option>
      <option  value="21" data-time="21" data-display="21">
        21
      </option>
      <option  value="22" data-time="22" data-display="22">
        22
      </option>
      <option  value="23" data-time="23" data-display="23">
        23
      </option>
      </select>
      
      <label for="time-to-minutes">
        temps jusquâ€™Ã  (minutes)
        </label>
      <select id="time-to-minutes" name="time-to-minutes" class="js-time-picker">
        <!-- data-time & data-display used to caculate opening time and display time respectfully, please retain the formula -->
      <option selected value="00" data-time="00" data-display="00">
        00
      </option>
      <option  value="15" data-time="15" data-display="15">
        15
      </option>
      <option  value="30" data-time="30" data-display="30">
        30
      </option>
      <option  value="45" data-time="45" data-display="45">
        45
      </option>
      </select>
      
      <input id="time-to" name="time-to" type="hidden" value="">
      <!-- /time selection -->
      
    </span></span>
  
<span class="go-same-location"></span>
  
  <section id="map-flyout-container" aria-atomic="true" aria-live="polite">
    <a class="skiplink" href="#car-search-skip-links">
      retour au formulaire, ignorer les liens
    </a>
    <a class="skiplink" href="#end-form">
     ignorer la carte
    </a>
    <div id="map">
    </div>
    <div id="map-overlay-container"  class="js-results-container">
    
    </div>
    <div id="map-loader">
      <span class="map-message">
       Chargement des rÃ©sultats en cours
      </span>
    </div>
    <i aria-hidden="true" class="map-lock" data-icon="&#xe01d;" data-icon-locked="&#xe01c;">
    </i>
  </section>
  
  <section id="set-pick-up-date"  tabindex="-1" class="date-from calendar-flyout-container" aria-atomic="true" aria-live="polite">
    <h2 class="focus-point">
      Choisir une date de dÃ©part
    </h2>
    <a class="skiplink" href="#car-search-skip-links">
       retour au formulaire, ignorer les liens
    </a>
    <a class="skiplink" href="#end-form">
      ignorer le calendrier de dÃ©part
    </a>
    <div id="date-from-container"></div>
  </section>
  
  <!-- time selection -->
  <section id="set-from-time" tabindex="-1" class="set-brand-container clearfix time-from time-flyout-container no-table"  aria-atomic="true" aria-live="polite">
    <div class="opening-hours-box">
      <div class="opening-hours-inner">
        <div class="opening-hours">
          <input type="hidden" name="openingHourText" id="openingHourText" value="Heures dâ€™ouverture">
        </div>
      </div>
    </div>
    
    <div id="time-from-container" class="time-select-container">
      <div class="inner">
        <h2 class="pickup">
          Choisir une heure de dÃ©part
        </h2>
        <a class="skiplink" href="#car-search-skip-links">
           retour au formulaire, ignorer les liens
        </a>
        <a class="skiplink" href="#end-form">
           ignorer le sÃ©lecteur dâ€™heure de dÃ©part
        </a>
        
        <div class="psuedo-time-container">
          <label class="action-trigger-time hours from" for="time-from-hours" id="action-trigger-time-hours-from">
            <span class="time">
              &nbsp;
            </span>
            <span class="arrows">
              <i aria-hidden="true" data-icon="&#xe014;"></i>
              <i aria-hidden="true" data-icon="&#xe015;"></i>
            </span>
          </label>
          <span class="colon">
            :
          </span>
          <label class="action-trigger-time minutes from" for="time-from-minutes" id="action-trigger-time-minutes-from">
            <span class="time">
              &nbsp;
            </span>
            <span class="arrows">
              <i aria-hidden="true" data-icon="&#xe014;"></i>
              <i aria-hidden="true" data-icon="&#xe015;"></i>
            </span>
          </label>
        </div>
        
        <div class="actions">
          <a href="#" class="additional-control" id="select-pickUpTime">
            choisir cette heure 
          </a>
        </div>
        <div class="timelist"></div>
      </div>
    </div>
  </section>  
<section id="set-drop-off-date"  tabindex="-1" class="date-to calendar-flyout-container" aria-atomic="true" aria-live="polite">
    <h2>
      Choisir une date de retour 
    </h2>
    <a class="skiplink" href="#car-search-skip-links">
       retour au formulaire, ignorer les liens
    </a>
    <a class="skiplink" href="#end-form">
      ignorer le calendrier de retour
    </a>
    <div id="date-to-container"></div>
</section>
  
<section id="set-to-time" tabindex="-1" class="set-brand-container clearfix time-to time-flyout-container no-table" aria-atomic="true" aria-live="polite">
	<div class="opening-hours-box">
      <div class="opening-hours-inner">
        <div class="opening-hours">
        </div>
      </div>
    </div>
    
    <div id="time-to-container" class="time-select-container">
      <div class="inner">
        <h2 class="pickup">
          Choisir une heure de retour 
        </h2>
        <a class="skiplink" href="#car-search-skip-links">
          retour au formulaire, ignorer les liens
        </a>
        <a class="skiplink" href="#end-form">
          ignorer le sÃ©lecteur dâ€™heure de retour
        </a>
        
        <div class="psuedo-time-container">
          <label class="action-trigger-time hours to" for="time-to-hours" id="action-trigger-time-hours-to">
            <span class="time">
              &nbsp;
            </span>
            <span class="arrows">
              <i aria-hidden="true" data-icon="&#xe014;"></i>
              <i aria-hidden="true" data-icon="&#xe015;"></i>
            </span>
          </label>
          <span class="colon">
            :
          </span>
          <label class="action-trigger-time minutes to" for="time-to-minutes" id="action-trigger-time-minutes-to">
            <span class="time">
              &nbsp;
            </span>
            <span class="arrows">
              <i aria-hidden="true" data-icon="&#xe014;"></i>
              <i aria-hidden="true" data-icon="&#xe015;"></i>
            </span>
          </label>
        </div>
        
        <div class="timelist"></div>
      </div>
    </div>
</section>











<input type="hidden" id="offerStartDate" name="offerStartDate" value="" />
<input type="hidden" id="offerEndDate" name="offerEndDate" value="" />
<input type="hidden" id="blackoutStartDate" name="blackoutStartDate" value="" />
<input type="hidden" id="blackoutEndDate" name="blackoutEndDate" value="" />
<input type="hidden" id="cor" name="cor" value="" />
<input type="hidden" id="hideAwdNumber" name="hideAwdNumber" value="false" />
<input type="hidden" id="hideAwdCodeAndMessage" name="hideAwdCodeAndMessage" value="false" />
<div class="car-rental-search-footer" id="end-form">
  <div class="car-rental-search-options-container">
    <div class="car-rental-search-options">
       <span class="option-item return-option option-item-checkbox">
        <label for="returnToDifferentLocation">
          <input type="checkbox" id="returnToDifferentLocation" name="returnToDifferentLocation" />
          <i data-icon="&#xe001;" aria-hidden="true"></i>
          <span class="checkbox-title">Retour Ã  une agence diffÃ©rente</span>
         </label>
       </span>
         <!-- YDS QB -->
         <!-- use any one class based on scenario
          to show checkbox by default :- show-qb-check 
          to show Drop down :- show-dob-drop 
          to prepopulate the seelcted text box :- qb-dob-selected-->
        <span class="option-item qb-dob  option-item-checkbox ">
          <span class="qb-yds-text clearfix">
            <span class="qb-edit-text">
              <i data-icon="&#x4c;" class="qb-yds-back" aria-hidden="true"></i>Merci d'indiquer la date de naissance du conducteur
            </span>
          
            <span class="qb-yds-q">?
              <span class="qb-yds-qtext">
                Si vous avez moins de 30 ans et plus de 70 ans, merci de renseigner votre date de naissance afin dâ€™accÃ©der aux vÃ©hicules correspondant au mieux Ã  votre profil.
              </span>
            </span>
          </span>
          
          <span class="qb-yds-checkbox">
            <label for="yds-applicable">
              <input type="checkbox" checked="checked" id="yds-applicable" value="1" name="yds-applicable"/>
              <i data-icon="&#xe001;"  aria-hidden="true"></i>
              
              <span class="checkbox-title">
                Conducteur Ã¢gÃ© entre 30 et 70 ans
              </span>
            </label>
            
            <span class="qb-yds-q">?
              <span class="qb-yds-qtext">
                Si vous avez moins de 30 ans et plus de 70 ans, merci de renseigner votre date de naissance afin dâ€™accÃ©der aux vÃ©hicules correspondant au mieux Ã  votre profil.
              </span>
            </span>
          </span>
          
          <span class="qb-yds-selected">
            <span class="qb-edit-text">
              DATE DE NAISSANCE DU CONDUCTEUR : <b></b>
            </span>
            
            <i class="qb-edit-yds" data-icon="&#x4b;" aria-hidden="true"></i>
          </span>
          
          <span class="qb-dob-drop">
            <span class="ddholder">
              <div class="custom-selectbox ">
                 <span data-default="DD" class="selectedValue">JJ</span>
                 
                 <span class="arrows">
                     <i aria-hidden="true" data-icon="&#xe015;"></i>
                 </span>
                 
                 <select class="qb-select-tag" id="qb-yds-dd">
                  <option value="" selected="selected">JJ</option>
                      <option value="01" >1</option>
                      <option value="02" >2</option>
                      <option value="03" >3</option>
                      <option value="04" >4</option>
                      <option value="05" >5</option>
                      <option value="06" >6</option>
                      <option value="07" >7</option>
                      <option value="08" >8</option>
                      <option value="09" >9</option>
                      <option value="10" >10</option>
                      <option value="11" >11</option>
                      <option value="12" >12</option>
                      <option value="13" >13</option>
                      <option value="14" >14</option>
                      <option value="15" >15</option>
                      <option value="16" >16</option>
                      <option value="17" >17</option>
                      <option value="18" >18</option>
                      <option value="19" >19</option>
                      <option value="20" >20</option>
                      <option value="21" >21</option>
                      <option value="22" >22</option>
                      <option value="23" >23</option>
                      <option value="24" >24</option>
                      <option value="25" >25</option>
                      <option value="26" >26</option>
                      <option value="27" >27</option>
                      <option value="28" >28</option>
                      <option value="29" >29</option>
                      <option value="30" >30</option>
                      <option value="31" >31</option>
                 </select>
                 <input type="hidden" name="dd" value=/>
                 <input type="hidden" name="yy" value=/>
                 <input type="hidden" name="mm" value=/>
              </div>
            </span>
            
            <span class="mmholder">
              <div  class="custom-selectbox ">
                 <span data-default="MM" class="selectedValue">
                     MM
                 </span>
                 
                 <span class="arrows">
                     <i aria-hidden="true" data-icon="&#xe015;"></i>
                 </span>
                 
                 <select class="qb-select-tag" id="qb-yds-mm">
                  <option value="" selected="selected">MM</option>
                      <option value="01" >janvier</option>
                      <option value="02" >fÃ©vrier</option>
                      <option value="03" >mars</option>
                      <option value="04" >avril</option>
                      <option value="05" >mai</option>
                      <option value="06" >juin</option>
                      <option value="07" >juillet</option>
                      <option value="08" >aoÃ»t</option>
                      <option value="09" >septembre</option>
                      <option value="10" >octobre</option>
                      <option value="11" >novembre</option>
                      <option value="12" >dÃ©cembre</option>
                 </select>
              </div>
            </span>
            
           
            <span class="yyholder">
              <div class="custom-selectbox ">
                 <span data-default="YYYY" class="selectedValue">AAAA</span>
                 <span class="arrows">
                     <i aria-hidden="true" data-icon="&#xe015;"></i>
                 </span>
                 
                 <select class="qb-select-tag" id="qb-yds-yy">
                  <option value="" selected="selected">AAAA</option>
                  <option value="2002" >2002</option>
                  <option value="2001" >2001</option>
                  <option value="2000" >2000</option>
                  <option value="1999" >1999</option>
                  <option value="1998" >1998</option>
                  <option value="1997" >1997</option>
                  <option value="1996" >1996</option>
                  <option value="1995" >1995</option>
                  <option value="1994" >1994</option>
                  <option value="1993" >1993</option>
                  <option value="1992" >1992</option>
                  <option value="1991" >1991</option>
                  <option value="1990" >1990</option>
                  <option value="1989" >1989</option>
                  <option value="1988" >1988</option>
                  <option value="1987" >1987</option>
                  <option value="1986" >1986</option>
                  <option value="1985" >1985</option>
                  <option value="1984" >1984</option>
                  <option value="1983" >1983</option>
                  <option value="1982" >1982</option>
                  <option value="1981" >1981</option>
                  <option value="1980" >1980</option>
                  <option value="1979" >1979</option>
                  <option value="1978" >1978</option>
                  <option value="1977" >1977</option>
                  <option value="1976" >1976</option>
                  <option value="1975" >1975</option>
                  <option value="1974" >1974</option>
                  <option value="1973" >1973</option>
                  <option value="1972" >1972</option>
                  <option value="1971" >1971</option>
                  <option value="1970" >1970</option>
                  <option value="1969" >1969</option>
                  <option value="1968" >1968</option>
                  <option value="1967" >1967</option>
                  <option value="1966" >1966</option>
                  <option value="1965" >1965</option>
                  <option value="1964" >1964</option>
                  <option value="1963" >1963</option>
                  <option value="1962" >1962</option>
                  <option value="1961" >1961</option>
                  <option value="1960" >1960</option>
                  <option value="1959" >1959</option>
                  <option value="1958" >1958</option>
                  <option value="1957" >1957</option>
                  <option value="1956" >1956</option>
                  <option value="1955" >1955</option>
                  <option value="1954" >1954</option>
                  <option value="1953" >1953</option>
                  <option value="1952" >1952</option>
                  <option value="1951" >1951</option>
                  <option value="1950" >1950</option>
                  <option value="1949" >1949</option>
                  <option value="1948" >1948</option>
                  <option value="1947" >1947</option>
                  <option value="1946" >1946</option>
                  <option value="1945" >1945</option>
                  <option value="1944" >1944</option>
                  <option value="1943" >1943</option>
                  <option value="1942" >1942</option>
                  <option value="1941" >1941</option>
                  <option value="1940" >1940</option>
                  <option value="1939" >1939</option>
                  <option value="1938" >1938</option>
                  <option value="1937" >1937</option>
                  <option value="1936" >1936</option>
                  <option value="1935" >1935</option>
                  <option value="1934" >1934</option>
                  <option value="1933" >1933</option>
                  <option value="1932" >1932</option>
                  <option value="1931" >1931</option>
                  <option value="1930" >1930</option>
                  <option value="1929" >1929</option>
                  <option value="1928" >1928</option>
                  <option value="1927" >1927</option>
                  <option value="1926" >1926</option>
                  <option value="1925" >1925</option>
                  <option value="1924" >1924</option>
                  <option value="1923" >1923</option>
                  <option value="1922" >1922</option>
                  <option value="1921" >1921</option>
                  <option value="1920" >1920</option>
                  <option value="1919" >1919</option>
                 </select>
              </div>
            </span>
            <span class="qb-yds-enter-holder">
              <a href="#" class="qb-yds-enter">
                Valider
                <span class="is-visually-hidden"> date of birth to select Young Driver surcharge</span>
              </a>
            </span>
          </span>
        </span>
        <!-- YDS QB -->
      
        <span class="option-item awd-option ">
          <label for="awdcode">
            <span>
              Code de rÃ©duction Avis (AWD)
            </span>
            <i aria-hidden="true" data-icon="&#xe004;"></i>
          </label> 
<input type="text" id="awdcode" name="awdcode" maxlength="7" value="" />
        </span>
  
	  
    	        
        <mark>
      <span class="rental-time"></span>
        </mark>
        
    	<input type="hidden" id="rentalPeriod" name="rentalPeriod" />
        <input type="hidden" name="driverDob" id="driverDob" value=""/>
        <input type="hidden" name="isUasorSds" id="isUasorSds" value=""/>
         
         
     <span class="option-item submit-option car-search-btn-event">
      <button id="car-search-submission1" class="go-button go-return-location" type="submit">
        <strong>Rechercher un vÃ©hicule</strong>
          <span aria-hidden="true" data-icon="&#xe004;"></span>
      </button>
         </span>
         
      </div>
   </div>
</div> 
</form>



<script class="template-map-flyout" type="text/template">

<div id="mapOverlay" class="<%= setOverlayClass(error) %>">
    <div class="mapScroller">
        <% if (error && error != '') { %>
            <mark class="overlay-error">
                <i class="large" data-icon="&#xe094;"></i>
                <div class="msg">
                    <p>
                        <em><%= error %></em>
                    </p>
                </div>
            </mark>
        <% } %>

        <% if (message && message != '') { %>
            <mark class="overlay-msg">
                <i class="large" data-icon="&#xe094;"></i>
                <div class="msg">
                    <p>
                        <em><%= message %></em>
                    </p>
                </div>
            </mark>
        <% } %>

        <% _.each( results, function( resultItem ){ %>
            <% if (resultItem.title && resultItem.title != '') { %>
                <h2><%= resultItem.title %></h2>
            <% } %>

            <ol>
                <% _.each( resultItem.data, function( dataItem, index ){ %>
                	<% if (!dataItem.LocationBrand) {
				         dataItem.LocationBrand = "Avis"
				    } %>
                    <li>
                        <% if (isMobile == false) { %>
                            <a class="flyout-name <%= getPopularClass(dataItem.Popular) %> <%= getExtraClasses(index) %>" href="#<%= dataItem.StationCode %>"
                                    data-station-code="<%= dataItem.StationCode %>"
				                  	data-station-name="<%= dataItem.StationName %>"
				                  	data-station-type="<%= dataItem.StationType %>"
				                  	data-location-brand="<%= dataItem.LocationBrand %>"
                                    data-lat="<%= dataItem.GeoData.Latitude %>"
                                    data-lon="<%= dataItem.GeoData.Longitude %>"
                                    data-maxDays="<%= dataItem.MaxRentalDays %>">
                        <% } else { %>
                            <a class="flyout-name select-location" href="#<%= dataItem.StationCode %>"
                                    data-station-code="<%= dataItem.StationCode %>"
                                    data-station-name="<%= dataItem.StationName %>" 
                  					data-station-type="<%= dataItem.StationType %>"
                  					data-location-brand="<%= dataItem.LocationBrand %>"
                                    data-maxDays="<%= dataItem.MaxRentalDays %>">
                        <% } %>

                            <% if (dataItem.StationType == 'airport') { %>
                                 <i aria-hidden="true" class="large icon-airport" data-icon="&#xe093;"></i>
                            <% } %>
                            <% if (dataItem.StationType == 'train') { %>
                                <i aria-hidden="true" class="large icon-train" data-icon="&#xe092;"></i>
                            <% } %>
                            <% if (dataItem.StationType == 'building') { %>
                                <i aria-hidden="true" class="large icon-building" data-icon="&#xe091;"></i>
                            <% } %>

                            <span class="flyout-name-content">
                                <%= dataItem.StationName %>


                                <% if (dataItem.StationType == 'airport') { %>
                                     <span class="is-visually-hidden">(Airport location)</span>
                                <% } %>
                                <% if (dataItem.StationType == 'train') { %>
                                    <span class="is-visually-hidden">(Train station location)</span>
                                <% } %>
                                <% if (dataItem.StationType == 'building') { %>
                                    <span class="is-visually-hidden">(In town location)</span>
                                <% } %>

                                <% if (dataItem.ResultAge) { %>
                                    <span class="flyout-age"><%= dataItem.ResultAge %></span>
                                <% } %>
                                <% if (dataItem.GeoData.Distance) { %>
                                    <span class="flyout-distance"><%= dataItem.GeoData.Distance %></span>
                                <% } %>
                            </span>
                        </a>

                        <% if (isMobile == false) { %>
                            <div class="flyout-detail">
                                <div class="flyout-detail-content">
                                    <i aria-hidden="true" data-icon="&#xe002;" class="flyout-close"></i>
                                    <address>
                                        <% _.each( dataItem.Address.FormattedToList, function( addressLine ){ %>
                                            <%= addressLine %> <br />
                                        <% }); %>
                                    </address>
                                     
                            <% if ((is24hrs(dataItem.is24hrs) == true) || (isDelColAvailable(dataItem.IsDeliveryAndCollectionAvailable) == true)){%>
                              <div class="delivery-collection-24hr">
                                <% if (is24hrs(dataItem.is24hrs) == true) { %>
                                  <p></p>
                                <% }%> 
                                <% if (isDelColAvailable(dataItem.IsDeliveryAndCollectionAvailable) == true){%>
                                  <p>Livraison et reprise disponibles Ã  cette agence</p>
                                  <% isDelandColAvailable = true %>
                                <%}else{ %>
                                  <% isDelandColAvailable = false %>
                                <% }%>
                              </div>
                            <%} else{%>
                            <% isDelandColAvailable = false %>
                                <% }%>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="is-visually-hidden"> Jour</th>
                                                <th scope="col" class="is-visually-hidden">Heures dâ€™ouverture</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                      <% for(var xFact=1;xFact<7;xFact++) { %>
                      <tr>
                        <th scope="row"><%= dataItem.OpeningTimes[xFact].DayOfWeek %>
                        </th>
                        <td data-open="<%= dataItem.OpeningTimes[xFact].OpeningTime %>" data-close="<%= dataItem.OpeningTimes[xFact].ClosingTime %>">
                                       <% if( dataItem.OpeningTimes[xFact].ShouldDisplaySecondText ) {  %>
                                        <span class="firstText"><%= dataItem.OpeningTimes[xFact].FirstText %></span>
                                        <span class="secondText"><%= dataItem.OpeningTimes[xFact].SecondText %></span>
                                      <% } else {%>
                                         <span class="firstText"><%= dataItem.OpeningTimes[xFact].FirstText %></span>
                                        <span class="secondText">&nbsp;</span>
                                      <% } %>

                        </td>
                      </tr>
                    
                      <% }%>
                      <tr>
                        <th scope="row"><%= dataItem.OpeningTimes[0].DayOfWeek %>
                        </th>
                        <td data-open="<%= dataItem.OpeningTimes[0].OpeningTime %>" data-close="<%= dataItem.OpeningTimes[0].ClosingTime %>">
                                       <% if( dataItem.OpeningTimes[0].ShouldDisplaySecondText ) {  %>
                                        <span class="firstText"><%= dataItem.OpeningTimes[0].FirstText %></span>
                                        <span class="secondText"><%= dataItem.OpeningTimes[0].SecondText %></span>
                                      <% } else {%>
                                         <span class="firstText"><%= dataItem.OpeningTimes[0].FirstText %></span>
                                        <span class="secondText">&nbsp;</span>
                                      <% } %>

                        </td>
                      </tr>
                                        </tbody>
                                    </table>
                                    <a href="#button" class="select-location"
                                        data-station-code="<%= dataItem.StationCode %>"
                                        data-station-name="<%= dataItem.StationName %>"
                    					data-station-type="<%= dataItem.StationType %>"
                    					data-location-brand="<%= dataItem.LocationBrand %>"
                                        data-maxDays="<%= dataItem.MaxRentalDays %>">
                                            Choisir cette agence
                                    </a>
                                </div>
                            </div>
                        <% } %>
                    </li>
                <% }); %>
                <% if (geoData) { %>
                    <li class="view-on-map">
                        <a class="flyout-name" href="<%= ABG.urls.mapPageMobile %>&lon=<%= geoData.longitude %>&amp;lat=<%= geoData.latitude %>&type=<%= activeId %>">
                                <span class="flyout-name-content">
                               Voir la carte
                                </span>
                            <i aria-hidden="true" data-icon="&#xe004;"></i>
                        </a>
                    </li>
                <% } %>
            </ol>
        <% }); %>
    </div>
</div>
</script>


    <script class="template-address-table" type="text/template">    
    <table>
        <thead>
            <tr>
                <th scope="col" class="is-visually-hidden">Jour</th>
                <th scope="col" class="is-visually-hidden">Heures dâ€™ouverture</th>
            </tr>
        </thead>
        <tbody>
      <% var OpeningTimes, is24hrs, isDelandColAvailable;  %>
            <% _.each( OpeningTimes, function( timeItem, i ){ %>
                <tr data-day="<%= i %>">
                    <th scope="row"><%= timeItem.DayOfWeek %></th>
                    <td data-open="<%= timeItem.OpeningTime %>" data-close="<%= timeItem.ClosingTime %>"  <% if( timeItem.ShouldDisplaySecondText ) {  %> data-split-day data-afternoon-open="<%= timeItem.secondOpening %>" data-afternoon-close="<%= timeItem.secondClosing %>" <% } %> >
                          <% if( timeItem.ShouldDisplaySecondText ) {  %>
                            <span><%= timeItem.FirstText %></span>
                            <span><%= timeItem.SecondText %></span>
                        <% } else {%>
                             <%= timeItem.FirstText %>
                        <% } %>
                    </td>
                </tr>
            <% }); %>
        </tbody>
    </table>

    <% if (is24hrs == true) { %>
        <p class="opening-hours-is24hrs">
            Vous pouvez rapporter votre vÃ©hicule Ã  nâ€™importe quelle heure, en utilisant notre boÃ®te de retour sÃ©curisÃ©e. En revanche, vous serez responsable de tout dommage subi par le vÃ©hicule jusqu'Ã  la rÃ©ouverture de l'agence. Pensez simplement Ã  nous prÃ©venir Ã  lâ€™avance.
        </p>
    <% } %>
    <% if (isDelandColAvailable == true) { %>
        <p class="opening-hours-is24hrs">
            Livraison et reprise disponibles Ã  cette agence
        </p>
    <% } %>
</script>


   
  
      
        <script>
          ABG.carSearchData = {"message":null,"error":null,"results":[{"title":"","data":[{"is24hrs":false,"budgetStationCode":null,"budgetOpeningTimes":null,"LocationBrand":"Avis","MaxRentalDays":"90","StationName":"Agence Casablanca   - Maroc","StationCode":"CSS","PhoneNumber":"+212522 31 24 24","BudgetPhoneNumber":null,"Popular":false,"ResultAge":false,"GeoData":{"Latitude":33.594444,"Longitude":-7.606111,"Distance":null},"Address":{"countryCode":"MA","locName":"Agence Casablanca  ","country":"Maroc","Address1":"34 Rue Pierre Parent","Address2":" ","Address3":"","City":"Casablanca","Region":"","PostCode":"20000","FormattedToList":["34 Rue Pierre Parent","Casablanca","20000","+212522 31 24 24"]},"OpeningTimes":[{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Lundi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Mardi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Mercredi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Jeudi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Vendredi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Samedi","FirstText":"08:00 - 19:00","OpeningTime":"08:00","ClosingTime":"19:00","ShouldDisplaySecondText":false,"SecondText":null},{"secondOpening":null,"secondClosing":null,"brand":null,"DayOfWeek":"Dimanche","FirstText":"08:00 - 12:00","OpeningTime":"08:00","ClosingTime":"12:00","ShouldDisplaySecondText":false,"SecondText":null}],"OperatingTimeGroup":null,"Holidays":[],"IsOpen":true,"StationOpenOrClosedText":"","StationType":"building","IsDeliveryAndCollectionAvailable":false,"PreBookingHoursForDeliveryAndCollection":0,"DropOffOnlyTo":null,"ShowInPickUp":null}]}]};
         
        </script>
 <input type="hidden" id="maxDaysLen" value=""/>
<input type="hidden" value="" id="carExist">
<input type="hidden" value="" id="errorMSG">
<input type="hidden" value='' id="vehicleSearchInput">
<style>
.er-msg-arrow:before{
  border-color: #FFC62C rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
    border-width: 9px 9px 0;
    bottom: 0;
    margin-bottom: -9px;
  right:38% !important;
}
</style>    </div>
  </div>
</div>

<div class="row full">
                        <!-- Start M.D.44 Map -->
<div id="branch-map" itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates" data-latitude="" data-longitude="">
  <span class="lat" itemprop="latitude" content=""></span>
  <span class="lon" itemprop="longitude" content=""></span>
  </div>
<!-- End M.D.44 Map -->
                    </div>
          <div class="row full branch-details-wrapper" itemscope itemtype="http://schema.org/LocalBusiness">
                        <!-- Start M.D.65 Location Details -->
<div class="branch-details inpage-branch">
  <div id="flyout-title" >
     <h2 >Opening times</h2>
    <span id="flyout-icon">
      
    </span>
  </div>
    <table>
        <thead>
            <tr>
                <th scope="col" class="accessibility-content">Day</th>
                <th scope="col" class="accessibility-content">Opening</th>                                        
            </tr>
        </thead>
        <tbody class="branch-td-dis"></tbody>
    </table>

    <h2>Address</h2>
    <p class="branch-address" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
       
    </p>
</div>
<!-- End M.D.65 Location Details -->
                    </div>
<script type="text/template" class="branchTitleTemplate">
                   <% if (branch.StationType == 'airport') { %>
                                 <i aria-hidden="true" class="large icon-airport" data-icon="&#xe093;"></i>
                  <span class="is-visually-hidden">(Airport location)</span>
                            <% } %>
                            <% if (branch.StationType == 'train') { %>
                                <i aria-hidden="true" class="large icon-train" data-icon="&#xe092;"></i>
                <span class="is-visually-hidden">(Train station location)</span>
                            <% } %>
                            <% if (branch.StationType == 'building') { %>
                                <i aria-hidden="true" class="large icon-building" data-icon="&#xe091;"></i>
                <span class="is-visually-hidden">(In town location)</span>
                            <% } %>
</script>
<script type="text/template" class="branchAddrTemplate">
   <% var addressSchema=["streetAddress","addressLocality","addressRegion","postalCode","telephone"];
     for(var i=0;i<branch.FormattedToList.length;i++){ %>
       <span itemprop=<%= addressSchema[i]%> ><%= $.trim(branch.FormattedToList[i]) %><% if( i!=branch.FormattedToList.length-1){%>,&nbsp;<%}%></span>
     <% }%>
</script>

<script type="text/template" class="branchTemplate">
        <% _.each(branch.OperatingTimeGroup, function(items){ %>
            <tr>
                <th scope="row"><%= items.DayOfWeek %></th>
                  <% var i = items.DayOfWeek ;if(i.search("-")!=-1){var t=i.split('-'); i=t[0].trim().substring(0,2)+'-'+t[1].trim().substring(0,2)}else{ i = i.substring(0,2);}%>
                  <td itemprop="openingHours" content="<%= i+' '+items.FirstText %>"><%= items.FirstText %>
          <br><% if(items.ShouldDisplaySecondText){ %> <%= items.SecondText %><% }%></td>
            </tr>
  <% }); %>
</script>
<!-- End Desktop Inspiration Module -->

<div class="row full-on-mobile">
   <div class="extras-accordion flexible-content-accordion">
    <div class="extras-accordion-header">
      <a class="accordion-trigger">
        Read more<span class="extras-expander"><i data-icon="&#xe015;" data-icon-active="&#xe014;" aria-hidden="true"></i></span>
      </a>
    </div>
    <div class="extras-list">
			<div class="content-info-panes">  
<div class="addr_cont_div">
    <script type="application/ld+json">
    {
    "@context": "http://schema.org",
    "@type": "AutoRental",
    "name": "Agence Casablanca  ",
    "telephone": "+212522 31 24 24", 
    "address": {
    "@type": "PostalAddress",
    "streetAddress": "34 Rue Pierre Parent",
    "postalCode": "20000",
    "addressLocality": "Casablanca", 
    "addressCountry": {
    "@type": "Country", 
    "name": "Maroc", 
    "geo":
    { "@type": "GeoCoordinates", "latitude": "33,594", "longitude": "-7,606" }
    }
    }, 
    "openingHours": [
               "Mo 08:00 - 19:00
         ",
               "Tu 08:00 - 19:00
         ",
               "We 08:00 - 19:00
         ",
               "Th 08:00 - 19:00
         ",
               "Fr 08:00 - 19:00
         ",
               "Sa 08:00 - 12:00
         ",
               "Su 08:00 - 19:00
         "
    ]
    }
  </script>
  <h2 class="naapTitle1">CoordonnÃ©es</h2>
    <span class="changeFontSize">
       34 Rue Pierre Parent,
       Casablanca,
       20000.
    &nbsp; TÃ©l : <a href="tel:+212522 31 24 24">+212522 31 24 24</a><br/>
    </span>
   
     <div id="is24hrs">

       </div>
</div>
<h2 class="naapTitle2">Horaires d'ouverture</h2>
 <div class="openTim1_div">
      <table style="width: 100%;">
          <tr>
            <td>Lundi</td>
             <td><span>08:00 - 19:00</span></td>
          </tr>
          <tr>
            <td>Mardi</td>
             <td><span>08:00 - 19:00</span></td>
          </tr>
          <tr>
            <td>Mercredi</td>
             <td><span>08:00 - 19:00</span></td>
          </tr>
          <tr>
            <td>Jeudi</td>
             <td><span>08:00 - 19:00</span></td>
          </tr>
     </table>
  </div>
  
  <div  class="openTim2_div">
      <table style="width: 100%;">
          <tr>
            <td>Vendredi</td>
            <td><span>08:00 - 19:00</span></td>
          </tr>
          <tr>
            <td>Samedi</td>
            <td><span>08:00 - 19:00</span></td>
          </tr>
          <tr>
            <td>Dimanche</td>
            <td><span>08:00 - 12:00</span></td>
          </tr>
      </table>  
   </div>
			</div>
<div class="content-info-panes features-list"  >
  <div class="content-51b"  >
	
	

<div class="content-51b-list l-col-50">
  <div class="spotlight-feature-text">
      <h2>Agence Avis Casablanca Centre-Ville  </h2>
    <span class="changeFontSize"> <p class="MsoNormal" style="margin-top:12.0pt;margin-right:0cm;margin-bottom:&#10;12.0pt;margin-left:0cm;text-align:justify;line-height:14.65pt"><u><span lang="FR">Voyagez en toute libert&eacute; et louez une voiture &agrave; Casablanca pour partir &agrave; la d&eacute;couverte de la Ville Blanche&nbsp;!</span></u><span lang="FR"><o:p></o:p></span></p> <p class="MsoNormal" style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:&#10;justify;line-height:14.65pt"><span lang="FR">Les &eacute;quipes de notre agence de location de voitures &agrave; Casablanca vous proposent une large gamme de v&eacute;hicules pour tous vos d&eacute;placements familiaux, professionnels ou autres. Nous vous proposons aussi bien une citadine pour vous faufiler dans les ruelles marocaines, qu&rsquo;un v&eacute;hicule utilitaire ou encore une berline confortable pour faire de longs trajets le long du littoral.&nbsp;</span><span lang="FR">Tout &eacute;quip&eacute;, l&rsquo;ensemble de notre parc automobile est parfaitement entretenu et r&eacute;vis&eacute; pour vous assurer un voyage sans anicroche. Situ&eacute;e dans le centre-ville de Casablanca et ouverte tous les jours, notre agence de location voiture &agrave; Casablanca vous assure un retrait facile et rapide de votre v&eacute;hicule de location.&nbsp;<br /> <br /> <span lang="FR"><u>Visitez la ville et les alentours gr&acirc;ce &agrave; votre location de voiture &agrave; Casablanca<br /> </u><br /> Capital &eacute;conomique du pays, Casablanca est une ville jeune et dynamique qui regroupe 4 millions d'habitants. Ouverte et en pleine expansion, elle concentre pr&egrave;s de 60% des activit&eacute;s &eacute;conomique du pays. Modernit&eacute; et tradition se c&ocirc;toient et les activit&eacute;s et choses &agrave; voir sont nombreuses. Alors louez une voiture &agrave; Casablanca et partez en excursion facilement avec Avis Casablanca !&nbsp;<o:p></o:p></span><span lang="FR">En visitant le quartier des Habous, la mosqu&eacute;e Hassan II ou encore l'ancienne Medina, vous d&eacute;couvrirez l'histoire de cette tr&egrave;s ancienne cit&eacute;. Le Morocco Mall ou l'AnfaPlace Shopping Center vous plongeront quant &agrave; eux dans le Casablanca r&eacute;cent et moderne. Plut&ocirc;t baignade ? La corniche ou le Tamaris Aquaparc sont fait pour vous.&nbsp;<o:p></o:p></span><span lang="FR">N'h&eacute;sitez plus et partez &agrave; la d&eacute;couverte de cette ville aux mille facettes.&nbsp;Avec Avis, votre&nbsp;<b>location de voiture &agrave; Casablanca</b>&nbsp;sera facile et votre s&eacute;jour plein de d&eacute;couvertes ! C'est partir avec Avis Casablanca !</span><o:p></o:p></span></p> <span lang="FR" style="font-size: 10pt; line-height: 115%;"><span style="background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"> <br /> <a href="/">RESERVER AVIS CASABLANCA</a></span></span></span>
  </div>
</div>


<div class="content-51b-image l-col-50 feature-2-2">
         <img class="responsive-image"
        data-small="https://avisassets.abgemea.com/.imaging/featureImageSmall/dms/DMS/local/MA/Visuels-StockLib/Pages-agences/Casablanca_centre-ville.jpg"
        data-small-retina="https://avisassets.abgemea.com/.imaging/featureImageSmall/dms/DMS/local/MA/Visuels-StockLib/Pages-agences/Casablanca_centre-ville.jpg"
        data-large="https://avisassets.abgemea.com/.imaging/featureImageLarge/dms/DMS/local/MA/Visuels-StockLib/Pages-agences/Casablanca_centre-ville.jpg"
        data-large-retina="https://avisassets.abgemea.com/.imaging/featureImageLarge/dms/DMS/local/MA/Visuels-StockLib/Pages-agences/Casablanca_centre-ville.jpg"
        src="" alt="Avis location de voiture Ã  casablanca"/>
      
            
        
</div>
   </div>  
</div>
    </div>
   </div>
</div>

 <div class="row full homepage-promos">  
 </div>
</div><div class="content-info-panes breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
      


  <div>
   <a href="https://www.avis.ma/" itemprop="url">
      <span itemprop="title">Accueil</span></a>
    <i data-icon="&#xe004;" aria-hidden="true"></i>
  </div>
      


  <div>
   <a href="https://www.avis.ma/location-voiture-maroc" itemprop="url">
      <span itemprop="title">Agences location de voiture Maroc</span></a>
    <i data-icon="&#xe004;" aria-hidden="true"></i>
  </div>
      


  <div>
   <a href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville" itemprop="url">
      <span itemprop="title">Agences location voiture centre-ville </span></a>
    <i data-icon="&#xe004;" aria-hidden="true"></i>
  </div>
   <div>
      <span itemprop="title">Agence location voiture Casablanca centre-ville</span>
  </div>  
</div>

@endsection

        @section('footer')
            @include('inc.footer')

        @endsection
