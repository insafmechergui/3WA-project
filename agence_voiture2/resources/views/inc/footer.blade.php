<footer class="site-footer" id="site-footer">
<section id="emailSignupSection" class="footer-block email-signup two">
<h2>
  <a href="#newsletter-signup" class="signup-head action-toggle">
     Abonnez-vous à notre Newsletter ici <span class="is-visually-hidden"
    data-open-message="click to close">click to open</span> <i
    aria-hidden="true" data-icon="&#x2b;" data-icon-open="&#x2212;"></i> </a>
</h2>
<form action="#" autocomplete="off" method="post" id="newsletter-signup"
  class="newsletter-signup" novalidate="">

  <div class="form-row">
    <label for="newsletter-email">Recevez en exclusivité nos offres spéciales pour vos locations de voiture au Maroc.<span
      class="is-visually-hidden">(required</span>
    </label> <input class="required email" type="email" id="newsletter-email"
      name="newsletter-email" value="" maxlength="65">
  </div>
    
    <div class="form-row">
    <button class="submit-button" type="submit" value="Sign In">
        Je m&#039;abonne 
<i data-icon="&#xe004;"></i>
    </button>
  </div>
    <div class="priv-policy">
      <a id="privacy"  href="javascript:void(0)" class="js-overlay tmc">Politique de confidentialité</a>
    </div>


</form>
</section>

<script type="text/template" class="emailTemplateSuccess">
  
                <h2 class="submitted">
                    <span href="#newsletter-signup" class="signup-head">
                       Merci. Vous êtes maintenant abonné(e) à la newsletter Avis
                        <i aria-hidden="true" data-icon="&#xe001;"></i>
                    </span>
                </h2>
  </script>
<input type="hidden" id="urlCountry" value="MA" />
<input type="hidden" id="urlLocale" value="fr_MA" />

<script type="text/template" class="termsTemplate">
  <div class="contentpage-overlay-mask" >
    <div class="contentpage-overlay-inner contentpage-overlay-full-width">
        <div class="contentpage-overlay-bg">
            <h2 id="overlay-title">Conditions générales</h2>
            <a href="#" class="close-overlay">
                <i data-icon="&#xe002;" aria-label="close the terms and conditions information"></i>
                Close
            </a>

            <div class="contentpage-overlay-scroller">

                <ul class="accordion-list">
                  <% var termText, payCurr ="";for(var i=0;i< tac.TermsAndConditions.Section.length;i++){%>
                    <% if(tac.TermsAndConditions.Section[i].Category == "BOOK" || tac.TermsAndConditions.Section[i].Category == "LOC"  ||  tac.TermsAndConditions.Section[i].Category == "DC" || tac.TermsAndConditions.Section[i].Category == "PAY" || tac.TermsAndConditions.Section[i].Category == "CANX" || tac.TermsAndConditions.Section[i].Category == "PRIV" || tac.TermsAndConditions.Section[i].Category == "NO_SHOW_PRE" || tac.TermsAndConditions.Section[i].Category == "NO_SHOW_POST"||tac.TermsAndConditions.Section[i].Category == "BOOK_PRE"|| tac.TermsAndConditions.Section[i].Category == "BOOK_POST"|| tac.TermsAndConditions.Section[i].Category == "CONFIRM") {%>
                     <li class="<%=tac.TermsAndConditions.Section[i].Category%>" id="privacyPolicyPo<%=tac.TermsAndConditions.Section[i].Category%>">
                        <div class="accordion-header">
                            <h3><%=tac.TermsAndConditions.Section[i].Description%></h3>

                            <a href="#">
                                <span class="accordion-valid-message" data-valid-text="Complété"></span>
                                <i aria-hidden="true" data-icon="&#xe015;" data-open-icon="&#xe014;"></i>
                                <span class="is-visually-hidden">Show detail</span>
                            </a>
                        </div>

                        <% if(document.getElementById("payCurrency")){payCurr  = document.getElementById("payCurrency").value}%>
                        <% if(tac.TermsAndConditions.Section[i].Text != undefined){termText = tac.TermsAndConditions.Section[i].Text;}else{termText = tac.TermsAndConditions.Section[i].ShortDescription;}%>
                                 <%  termText = termText.replace("$(No_show_fees)",payCurr)%> 
                        <div class="accordion-content"><%=termText%> </div>
                          </li>  
                          <%}}%>                  
                </ul>
            </div>
        </div>
    </div>
                      </div>
</script>




<script type="text/template" class="termsTemplateClose">
    <div class="contentpage-overlay-mask" >
        <div class="contentpage-overlay-inner contentpage-overlay-full-width">
            <div class="contentpage-overlay-bg">
                <h2 id="overlay-title">Conditions générales</h2>
                <a href="#" class="close-overlay">
                    <i data-icon="&#xe002;" aria-label="close the terms and conditions information"></i>
                    Close
                </a>

                <div class="contentpage-overlay-scroller">      
                </div>
            </div>
        </div>
    </div>
</script>


<section class="footer-block links footer-segment">
      <div class="clearfix"> 
<div class="footer-links-subsection">
               <h3>
               
              
                 Besoin d&#039;aide ?
              </h3>
              <div class="more-avis-links-footer">
                  <ul>
<li   >
<a ] href="https://www.avis.ma/contacter-avis-location" >
  Nous contacter <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/faq" >
  Foire aux questions <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/qui-sommes-nous" >
  Qui sommes-nous ? <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/TermsAndCondition" >
  Conditions générales <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/politique-de-cookies" >
  Politique des cookies <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/plan-de-site" >
  Plan du site <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li>    
    

                  </ul>
  </div>
</div><div class="footer-links-subsection">
               <h3>
               
              
                 Besoin d&#039;une offre ou d&#039;un service ?
              </h3>
              <div class="more-avis-links-footer">
                  <ul>
<li   >
<a ] href="https://www.avis.ma/mon-compte-avis/avis-preferred" >
  Programme de fidélité Avis Preferred <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/bons-plans-location-voiture-maroc" >
  Nos bons plans <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/voiture-de-location-maroc" >
  Nos voitures de location <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/bons-plans-location-voiture-maroc/partenariats-avis-maroc" >
  Nos partenaires <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/contacter-avis-location/nous-appeler" >
  Recrutement Avis <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li>    
    

                  </ul>
  </div>
</div><div class="footer-links-subsection">
               <h3>
               
              
                 Destinations populaires
              </h3>
              <div class="more-avis-links-footer">
                  <ul>
<li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville/location-voiture-casablanca" >
  Location Voiture Casablanca <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville/location-voiture-marrakech" >
  Location Voiture Marrakech <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville/location-voiture-rabat" >
  Location Voiture Rabat <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville/location-voiture-tanger" >
  Location Voiture Tanger <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-centre-ville/location-voiture-agadir" >
  Location Voiture Agadir <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li>    
    

                  </ul>
  </div>
</div><div class="footer-links-subsection">
               <h3>
               
              
                 Principaux aéroports
              </h3>
              <div class="more-avis-links-footer">
                  <ul>
<li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-aeroport/location-voiture-casablanca-aeroport" >
  Aéroport de Casablanca <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-aeroport/location-voiture-marrakech-aeroport" >
  Aéroport de Marrakech <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-aeroport/location-voiture-rabat-aeroport" >
  Aéroport de Rabat <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-aeroport/location-voiture-tanger-aeroport" >
  Aéroport de Tanger <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li><li   >
<a ] href="https://www.avis.ma/location-voiture-maroc/agences-aeroport/location-voiture-agadir-aeroport" >
  Aéroport d&#039;Agadir <i data-icon="&#xe004;" aria-hidden="true"></i>                 
</a>
</li>    
    

                  </ul>
  </div>
</div>       </div> 
  



</section> <section class="footer-block logo">

            <div class="avis-we-try" role="img"  aria-label="Avis car hire">
     <svg x="0px" y="0px" viewBox="0 0 709.246 196.712" enable-background="new 0 0 709.246 196.712"
   xml:space="preserve">

    <desc>Avis - we try harder</desc>
<g>
  <g id="Button_Group">
    <radialGradient id="we_try_shadow_1" cx="616.3926" cy="103.8633" r="92.8511" gradientUnits="userSpaceOnUse">
      <stop  offset="0" style="stop-color:#000000;stop-opacity:0.4"/>
      <stop  offset="0.7669" style="stop-color:#666666;stop-opacity:0.4"/>
      <stop  offset="1" style="stop-color:#000000;stop-opacity:0"/>
    </radialGradient>
    <path id="we_try_shadow_3" fill="url(#we_try_shadow_1)" d="M709.246,103.863c0,51.28-41.574,92.849-92.852,92.849
      c-51.283,0-92.856-41.568-92.856-92.849s41.573-92.849,92.856-92.849C667.672,11.015,709.246,52.583,709.246,103.863z"/>
    <radialGradient id="we_try_button_1" cx="600.002" cy="92.9438" r="92.946" gradientUnits="userSpaceOnUse">
      <stop  offset="0.95" style="stop-color:#F0F0F0"/>
      <stop  offset="0.9656" style="stop-color:#E7E7E7"/>
      <stop  offset="1" style="stop-color:#D9D9D9"/>
    </radialGradient>
    <path id="Button" fill="url(#we_try_button_1)" d="M692.95,92.947c0,51.331-41.616,92.94-92.949,92.94
      c-51.33,0-92.948-41.609-92.948-92.94C507.053,41.611,548.671,0,600.001,0C651.334,0,692.95,41.611,692.95,92.947z"/>
    <g id="Highlight">
      <path fill="#EFEFF0" d="M521.644,107.466c-8.019-43.274,20.56-84.855,63.837-92.875c0,0,5.264-0.592,4.594-5.357
        c-0.67-4.767-6.167-3.108-6.167-3.108c-47.952,8.889-79.616,54.96-70.726,102.909c0,0,0.932,5.502,5.419,4.455
        C523.086,112.448,521.644,107.466,521.644,107.466"/>
      <path fill="#F0F0F0" d="M521.58,107.449c-8.085-43.706,20.919-84.945,63.877-92.92c0,0,5.188-0.583,4.527-5.28
        c-0.66-4.698-6.078-3.063-6.078-3.063c-47.37,8.762-79.579,54.448-70.666,102.81c0,0,0.918,5.423,5.341,4.391
        C523.001,112.36,521.58,107.449,521.58,107.449"/>
      <path fill="#F0F0F1" d="M521.516,107.433c-8.152-44.139,21.278-85.036,63.917-92.966c0,0,5.112-0.575,4.461-5.203
        c-0.65-4.629-5.989-3.019-5.989-3.019c-46.788,8.635-79.54,53.936-70.606,102.71c0,0,0.905,5.344,5.263,4.327
        C522.916,112.271,521.516,107.433,521.516,107.433"/>
      <path fill="#F1F1F1" d="M521.451,107.416c-8.218-44.571,21.638-85.127,63.958-93.012c0,0,5.035-0.566,4.394-5.125
        c-0.641-4.56-5.899-2.974-5.899-2.974c-46.207,8.509-79.503,53.424-70.548,102.611c0,0,0.892,5.264,5.185,4.262
        C522.83,112.182,521.451,107.416,521.451,107.416"/>
      <path fill="#F1F1F2" d="M521.387,107.399c-8.284-45.004,21.998-85.218,63.998-93.058c0,0,4.96-0.558,4.328-5.048
        c-0.631-4.491-5.811-2.928-5.811-2.928c-45.625,8.381-79.466,52.911-70.488,102.512c0,0,0.878,5.184,5.105,4.197
        C522.745,112.094,521.387,107.399,521.387,107.399"/>
      <path fill="#F2F2F2" d="M521.322,107.383c-8.35-45.436,22.358-85.308,64.039-93.104c0,0,4.885-0.548,4.262-4.97
        c-0.621-4.422-5.722-2.884-5.722-2.884c-45.044,8.255-79.429,52.399-70.429,102.413c0,0,0.864,5.104,5.027,4.134
        C522.661,112.006,521.322,107.383,521.322,107.383"/>
      <path fill="#F2F2F3" d="M521.259,107.366c-8.417-45.868,22.717-85.399,64.078-93.15c0,0,4.809-0.541,4.196-4.893
        c-0.611-4.354-5.633-2.839-5.633-2.839c-44.463,8.128-79.391,51.887-70.37,102.313c0,0,0.851,5.025,4.949,4.069
        C522.575,111.916,521.259,107.366,521.259,107.366"/>
      <path fill="#F3F3F3" d="M521.194,107.35c-8.484-46.301,23.076-85.49,64.119-93.196c0,0,4.732-0.532,4.129-4.815
        c-0.602-4.285-5.544-2.794-5.544-2.794c-43.88,8.002-79.353,51.375-70.311,102.214c0,0,0.838,4.946,4.871,4.006
        C522.49,111.827,521.194,107.35,521.194,107.35"/>
      <path fill="#F3F3F4" d="M521.13,107.332c-8.55-46.732,23.437-85.579,64.159-93.241c0,0,4.657-0.523,4.063-4.738
        c-0.592-4.216-5.455-2.75-5.455-2.75c-43.298,7.876-79.315,50.863-70.252,102.115c0,0,0.825,4.867,4.794,3.941
        C522.405,111.739,521.13,107.332,521.13,107.332"/>
      <path fill="#F4F4F4" d="M521.066,107.316c-8.616-47.165,23.796-85.671,64.199-93.287c0,0,4.581-0.515,3.996-4.661
        c-0.582-4.147-5.365-2.704-5.365-2.704c-42.717,7.748-79.277,50.351-70.192,102.016c0,0,0.812,4.787,4.715,3.877
        C522.32,111.65,521.066,107.316,521.066,107.316"/>
      <path fill="#F4F4F5" d="M521.002,107.299c-8.684-47.597,24.155-85.761,64.239-93.333c0,0,4.506-0.506,3.931-4.583
        c-0.572-4.079-5.276-2.66-5.276-2.66c-42.136,7.622-79.24,49.839-70.134,101.917c0,0,0.799,4.707,4.637,3.812
        C522.235,111.562,521.002,107.299,521.002,107.299"/>
      <path fill="#F5F5F5" d="M520.938,107.282c-8.749-48.029,24.516-85.852,64.28-93.379c0,0,4.429-0.497,3.864-4.506
        c-0.563-4.009-5.188-2.614-5.188-2.614c-41.554,7.495-79.202,49.326-70.074,101.818c0,0,0.785,4.627,4.559,3.747
        C522.15,111.473,520.938,107.282,520.938,107.282"/>
      <path fill="#F5F5F6" d="M520.874,107.266c-8.816-48.461,24.874-85.942,64.319-93.424c0,0,4.354-0.489,3.799-4.429
        c-0.554-3.94-5.1-2.57-5.1-2.57c-40.971,7.368-79.164,48.814-70.015,101.718c0,0,0.771,4.549,4.48,3.685
        C522.064,111.385,520.874,107.266,520.874,107.266"/>
      <path fill="#F6F6F6" d="M520.81,107.25c-8.882-48.895,25.234-86.033,64.36-93.471c0,0,4.277-0.48,3.732-4.351
        c-0.544-3.871-5.011-2.524-5.011-2.524c-40.39,7.242-79.127,48.302-69.955,101.619c0,0,0.758,4.47,4.401,3.62
        C521.98,111.296,520.81,107.25,520.81,107.25"/>
      <path fill="#F6F6F7" d="M520.745,107.232c-8.948-49.327,25.594-86.123,64.401-93.516c0,0,4.201-0.472,3.665-4.273
        c-0.534-3.803-4.921-2.48-4.921-2.48c-39.809,7.115-79.09,47.79-69.896,101.521c0,0,0.744,4.39,4.324,3.555
        C521.895,111.207,520.745,107.232,520.745,107.232"/>
      <path fill="#F7F7F7" d="M520.681,107.216c-9.015-49.759,25.953-86.214,64.441-93.562c0,0,4.126-0.463,3.599-4.196
        c-0.523-3.734-4.832-2.436-4.832-2.436c-39.227,6.988-79.052,47.278-69.837,101.421c0,0,0.731,4.311,4.246,3.491
        C521.81,111.118,520.681,107.216,520.681,107.216"/>
      <path fill="#F7F7F8" d="M520.617,107.199c-9.082-50.191,26.312-86.305,64.481-93.607c0,0,4.05-0.455,3.532-4.119
        c-0.514-3.665-4.743-2.39-4.743-2.39c-38.645,6.862-79.015,46.766-69.777,101.322c0,0,0.718,4.23,4.167,3.427
        C521.725,111.03,520.617,107.199,520.617,107.199"/>
      <path fill="#F8F8F8" d="M520.553,107.184c-9.148-50.625,26.673-86.396,64.521-93.655c0,0,3.975-0.446,3.466-4.041
        c-0.504-3.597-4.653-2.345-4.653-2.345c-38.062,6.735-78.977,46.254-69.719,101.223c0,0,0.705,4.151,4.089,3.362
        C521.64,110.941,520.553,107.184,520.553,107.184"/>
      <path fill="#F8F8F9" d="M520.488,107.166c-9.215-51.056,27.032-86.486,64.562-93.7c0,0,3.898-0.437,3.399-3.963
        c-0.494-3.528-4.564-2.3-4.564-2.3c-37.481,6.608-78.939,45.742-69.659,101.124c0,0,0.69,4.071,4.011,3.297
        C521.555,110.853,520.488,107.166,520.488,107.166"/>
      <path fill="#F9F9F9" d="M520.424,107.15c-9.28-51.489,27.393-86.578,64.604-93.747c0,0,3.822-0.429,3.333-3.886
        c-0.485-3.459-4.476-2.256-4.476-2.256c-36.899,6.481-78.902,45.229-69.601,101.024c0,0,0.678,3.992,3.933,3.233
        C521.469,110.764,520.424,107.15,520.424,107.15"/>
      <path fill="#F9F9FA" d="M520.36,107.133c-9.348-51.921,27.751-86.667,64.643-93.792c0,0,3.746-0.42,3.267-3.809
        c-0.475-3.39-4.387-2.21-4.387-2.21c-36.317,6.354-78.863,44.717-69.541,100.925c0,0,0.664,3.913,3.855,3.169
        C521.384,110.676,520.36,107.133,520.36,107.133"/>
      <path fill="#FAFAFA" d="M520.296,107.116c-9.413-52.353,28.111-86.758,64.683-93.838c0,0,3.671-0.411,3.201-3.731
        c-0.466-3.321-4.298-2.166-4.298-2.166c-35.735,6.228-78.826,44.205-69.481,100.825c0,0,0.651,3.834,3.776,3.105
        C521.299,110.587,520.296,107.116,520.296,107.116"/>
      <path fill="#FAFAFB" d="M520.232,107.1c-9.48-52.786,28.47-86.849,64.723-93.883c0,0,3.595-0.403,3.135-3.654
        c-0.456-3.253-4.209-2.121-4.209-2.121c-35.154,6.102-78.789,43.693-69.422,100.727c0,0,0.637,3.754,3.697,3.041
        C521.214,110.498,520.232,107.1,520.232,107.1"/>
      <path fill="#FBFBFB" d="M520.168,107.083c-9.547-53.218,28.83-86.939,64.764-93.929c0,0,3.519-0.395,3.067-3.577
        c-0.446-3.183-4.119-2.076-4.119-2.076c-34.573,5.975-78.751,43.182-69.364,100.628c0,0,0.625,3.675,3.621,2.977
        C521.129,110.41,520.168,107.083,520.168,107.083"/>
      <path fill="#FBFBFC" d="M520.104,107.066c-9.613-53.651,29.189-87.03,64.804-93.975c0,0,3.443-0.387,3.002-3.5
        c-0.437-3.115-4.03-2.031-4.03-2.031c-33.991,5.848-78.714,42.668-69.305,100.527c0,0,0.611,3.596,3.542,2.913
        C521.044,110.32,520.104,107.066,520.104,107.066"/>
      <path fill="#FCFCFC" d="M520.039,107.05c-9.679-54.083,29.55-87.121,64.844-94.021c0,0,3.368-0.377,2.936-3.421
        c-0.426-3.046-3.941-1.986-3.941-1.986c-33.409,5.721-78.676,42.157-69.245,100.429c0,0,0.599,3.516,3.464,2.849
        C520.959,110.232,520.039,107.05,520.039,107.05"/>
      <path fill="#FCFCFD" d="M519.975,107.033c-9.746-54.515,29.91-87.211,64.885-94.067c0,0,3.292-0.369,2.869-3.344
        c-0.417-2.977-3.853-1.941-3.853-1.941c-32.827,5.595-78.639,41.645-69.186,100.33c0,0,0.584,3.436,3.385,2.784
        C520.874,110.144,519.975,107.033,519.975,107.033"/>
      <path fill="#FDFDFD" d="M519.911,107.017c-9.812-54.948,30.269-87.302,64.925-94.112c0,0,3.215-0.361,2.803-3.267
        c-0.408-2.908-3.764-1.896-3.764-1.896c-32.246,5.468-78.601,41.132-69.127,100.23c0,0,0.571,3.357,3.308,2.721
        C520.788,110.055,519.911,107.017,519.911,107.017"/>
      <path fill="#FDFDFE" d="M519.847,107c-9.879-55.38,30.629-87.393,64.965-94.159c0,0,3.14-0.352,2.736-3.189
        c-0.397-2.839-3.674-1.852-3.674-1.852c-31.665,5.341-78.563,40.621-69.067,100.131c0,0,0.558,3.277,3.229,2.656
        C520.704,109.966,519.847,107,519.847,107"/>
      <path fill="#FEFEFE" d="M519.783,106.983c-9.946-55.812,30.987-87.483,65.005-94.205c0,0,3.063-0.343,2.67-3.112
        c-0.388-2.771-3.585-1.807-3.585-1.807c-31.083,5.214-78.526,40.108-69.009,100.032c0,0,0.545,3.197,3.151,2.592
        C520.618,109.878,519.783,106.983,519.783,106.983"/>
      <path fill="#FEFEFF" d="M519.719,106.967c-10.012-56.245,31.348-87.574,65.045-94.25c0,0,2.988-0.335,2.604-3.035
        c-0.378-2.701-3.496-1.762-3.496-1.762c-30.501,5.088-78.487,39.596-68.948,99.933c0,0,0.53,3.119,3.072,2.527
        C520.533,109.789,519.719,106.967,519.719,106.967"/>
      <path fill="#FFFFFF" d="M519.654,106.95c-10.078-56.677,31.707-87.665,65.086-94.296c0,0,2.912-0.326,2.537-2.957
        c-0.368-2.633-3.407-1.717-3.407-1.717c-29.919,4.961-78.45,39.084-68.89,99.833c0,0,0.518,3.039,2.994,2.463
        C520.448,109.7,519.654,106.95,519.654,106.95"/>
    </g>
  </g>
  <path fill="none" d="M634.784,100.366c-3.039,0.537-5.106,3.061-4.813,5.965l10.523-1.857
    C640.025,101.825,638.123,99.776,634.784,100.366z"/>
  <path fill="none" d="M580.551,67.718c-3.037,0.535-5.104,3.06-4.814,5.966l10.526-1.856
    C585.796,69.179,583.889,67.128,580.551,67.718z"/>
  <path fill="none" d="M576.629,118.778l-1.152,0.203c-3.254,0.572-7.754,1.768-7.221,4.801c0.344,1.971,2.285,2.246,4.036,1.936
    c3.513-0.617,5.041-2.965,4.466-6.213L576.629,118.778z"/>
  <path fill="none" d="M609.215,105.224c-3.969,0.705-5.301,4.422-4.734,7.635c0.568,3.205,3.097,6.328,7.076,5.627
    c3.766-0.66,5.438-4.441,4.874-7.65C615.861,107.628,612.98,104.563,609.215,105.224z"/>
  <path fill="none" d="M668.882,78.542c-2.62,0.465-4.38,2.973-3.919,5.617c0.463,2.609,2.984,4.401,5.607,3.939
    c2.652-0.466,4.418-3.012,3.959-5.629C674.061,79.832,671.536,78.076,668.882,78.542z M671.547,86.255l-1.943-2.397l-0.839,0.147
    l0.469,2.658l-1.146,0.204l-1.128-6.375l2.208-0.39c1.225-0.213,2.489,0.076,2.729,1.446c0.166,0.919-0.305,1.621-1.165,1.979
    l2.206,2.482L671.547,86.255z"/>
  <path fill="none" d="M670.748,81.724c-0.125-0.699-0.827-0.749-1.428-0.643l-1.035,0.182l0.318,1.816l0.896-0.159
    C670.168,82.804,670.884,82.495,670.748,81.724z"/>
  <path fill="#FFFFFF" d="M389.379,47.449c8.518,0,16.479,2.578,25.191,10.387l20.301-20.844
    c-12.002-11.014-29.424-16.828-44.917-16.828c-25.536,0-53.021,12.58-53.021,42.976c0,24.76,17.62,33.451,35.024,39.057
    c17.997,5.83,28.466,9.324,28.466,19.779c0,11.016-8.917,14.904-18.97,14.904c-10.85,0-22.92-4.576-31.004-13.279l-20.295,20.832
    c11.991,12.586,31.743,19.74,51.299,19.74c27.094,0,52.457-14.129,52.457-45.678c0-27.292-24.004-35.042-42.584-41.046
    c-12.973-4.084-21.114-7.164-21.114-16.248C370.212,50.363,380.868,47.449,389.379,47.449z"/>
  <path fill="#FFFFFF" d="M460.11,23.637c-6.444,0-11.685,5.179-11.685,11.66c0,6.489,5.24,11.565,11.685,11.565
    c6.524,0,11.77-5.076,11.77-11.565C471.88,28.816,466.635,23.637,460.11,23.637z M460.11,45.179c-5.413,0-9.833-4.482-9.833-9.882
    c0-5.456,4.42-9.872,9.833-9.872c5.481,0,9.921,4.416,9.921,9.872C470.031,40.697,465.592,45.179,460.11,45.179z"/>
  <path fill="#FFFFFF" d="M465.088,32.515c0-2.824-2.432-3.855-4.953-3.855h-4.559v13.175h2.363v-5.502h1.732l3.048,5.502h2.872
    l-3.547-5.765C463.906,35.658,465.088,34.419,465.088,32.515z M457.939,34.419v-3.752h2.148c1.238,0,2.632,0.355,2.632,1.799
    c0,1.593-1.544,1.953-2.926,1.953H457.939z"/>
  <path fill="#D4002A" d="M601.195,64.961l3.598-0.636l1.684,9.582c0.689,3.936,2.52,7.053,7.954,6.098
    c1.157-0.204,2.483-0.66,3.325-1.162l-0.881-3.989c-0.545,0.405-1.42,0.693-2.105,0.812c-2.267,0.402-2.93-0.851-3.256-2.689
    l-1.686-9.541l5.138-0.904l-0.724-4.104l-5.133,0.904l-1.049-5.948l-5.045,0.892l1.051,5.945l-3.594,0.635L601.195,64.961z"/>
  <path fill="#D4002A" d="M627.273,77.298l-1.941-10.992c-0.26-1.497-0.074-5.678,4.547-6.49c0.475-0.085,0.907-0.117,1.623-0.068
    l-0.829-4.705c-0.358-0.023-0.882,0.025-1.267,0.09c-2.693,0.477-4.578,2.531-5.275,5.078l-0.085,0.016l-0.603-3.421l-4.92,0.866
    l3.623,20.53L627.273,77.298z"/>
  <rect x="277.995" y="23.637" fill="#FFFFFF" width="33.289" height="137.051"/>
  <path fill="#FFFFFF" d="M58.102,23.637L0,160.688h36.617l10.049-26.902h53.061l10.642,26.902h36.761L91.074,23.637H58.102z
     M56.172,107.271l17.404-47.042l17.039,47.042H56.172z"/>
  <polygon fill="#FFFFFF" points="196.41,122.675 164.095,23.637 126.932,23.637 178.804,160.688 211.907,160.688 264.734,23.637
    228.154,23.637   "/>
  <path fill="#D4002A" d="M637.37,114.024c-2.993,0.527-6.022-1.143-6.751-4.016l15.611-2.752c-0.041-0.477-0.115-0.904-0.201-1.377
    c-1.307-7.396-6.148-10.382-11.881-9.37c-6.208,1.092-10.092,6.28-8.934,12.909c1.181,6.672,6.602,9.906,12.939,8.789
    c3.893-0.684,6.551-2.568,8.08-5.66l-3.898-2.133C641.469,112.243,639.938,113.571,637.37,114.024z M634.784,100.366
    c3.339-0.59,5.241,1.459,5.71,4.107l-10.523,1.857C629.678,103.427,631.745,100.903,634.784,100.366z"/>
  <path fill="#D4002A" d="M612.363,88.796l2.545,14.416l-0.13,0.021c-1.308-1.137-3.692-2.66-7.456-1.992
    c-5.852,1.031-9.134,6.463-8.062,12.533c1.057,5.99,5.785,10.271,12.025,9.172c2.869-0.506,5.413-2.322,6.408-4.926l0.088-0.014
    l0.543,3.078l4.878-0.859l-5.706-32.333L612.363,88.796z M611.557,118.485c-3.979,0.701-6.508-2.422-7.076-5.627
    c-0.566-3.213,0.766-6.93,4.734-7.635c3.766-0.66,6.646,2.404,7.216,5.611C616.994,114.044,615.322,117.825,611.557,118.485z"/>
  <path fill="#D4002A" d="M659.646,92.015c-2.693,0.475-4.583,2.528-5.28,5.077l-0.09,0.016l-0.6-3.422l-4.921,0.867l3.621,20.53
    l5.136-0.906l-1.938-10.992c-0.268-1.496-0.076-5.675,4.545-6.493c0.475-0.08,0.909-0.113,1.621-0.061l-0.827-4.709
    C660.555,91.896,660.032,91.946,659.646,92.015z"/>
  <path fill="#D4002A" d="M654.409,51.342l-5.346,0.944l-2.459,15.826l-0.089,0.013l-8.357-13.916l-5.693,1.004l12.432,18.978
    l-0.565,2.787c-0.483,2.293-0.885,3.469-3.065,3.852c-0.554,0.096-1.256,0.131-1.979,0.041l0.356,4.523
    c0.939,0.055,1.854-0.018,2.713-0.17c4.52-0.797,5.943-3.256,6.743-7.232L654.409,51.342z"/>
  <polygon fill="#D4002A" points="545.785,91.667 548.883,67.7 548.968,67.687 560.068,89.148 565.284,88.228 568.805,56.382
    563.068,57.396 561.002,80.693 560.916,80.708 550.453,59.619 544.893,60.599 542.143,84.018 542.055,84.035 532.269,62.824
    526.371,63.863 540.562,92.588   "/>
  <path fill="#D4002A" d="M671.896,81.549c-0.239-1.37-1.504-1.659-2.729-1.446l-2.208,0.39l1.128,6.375l1.146-0.204l-0.469-2.658
    l0.839-0.147l1.943,2.397l1.391-0.244l-2.206-2.482C671.592,83.17,672.062,82.468,671.896,81.549z M669.499,82.92l-0.896,0.159
    l-0.318-1.816l1.035-0.182c0.601-0.106,1.303-0.057,1.428,0.643C670.884,82.495,670.168,82.804,669.499,82.92z"/>
  <path fill="#D4002A" d="M675.427,82.316c-0.556-3.139-3.539-5.197-6.695-4.643c-3.123,0.553-5.218,3.504-4.662,6.645
    c0.554,3.137,3.524,5.148,6.646,4.596C673.869,88.357,675.979,85.457,675.427,82.316z M670.57,88.099
    c-2.623,0.462-5.145-1.33-5.607-3.939c-0.461-2.645,1.299-5.152,3.919-5.617c2.654-0.467,5.179,1.289,5.647,3.928
    C674.988,85.087,673.223,87.633,670.57,88.099z"/>
  <path fill="#D4002A" d="M570.277,107.771c-3.113,0.551-6.172,2.234-8.106,4.781l3.202,2.658c1.098-1.562,3.008-2.955,5.183-3.344
    c2.571-0.451,4.93,0.412,5.374,2.936l0.089,0.514c-6.419,1.131-13.963,3.342-12.88,9.459c0.844,4.793,5.527,5.6,8.816,5.016
    c2.911-0.512,5.113-2.27,5.828-4.246l0.126-0.021l0.461,2.607l4.794-0.842l-2.207-12.488
    C580.23,110.69,577.638,106.472,570.277,107.771z M572.292,125.718c-1.751,0.311-3.692,0.035-4.036-1.936
    c-0.533-3.033,3.967-4.229,7.221-4.801l1.152-0.203l0.129,0.727C577.333,122.753,575.805,125.101,572.292,125.718z"/>
  <path fill="#D4002A" d="M549.453,111.442c-3.043,0.537-5,2.691-5.512,4.545l-0.086,0.014l-2.587-14.672l-5.138,0.906l5.709,32.338
    l5.13-0.908l-1.974-11.201c-0.484-2.74,0.611-5.799,3.863-6.371c3.287-0.584,4.33,2.318,4.758,4.76l1.99,11.289l5.138-0.9
    l-2.268-12.836C557.739,114.214,554.793,110.499,549.453,111.442z"/>
  <path fill="#D4002A" d="M592.002,79.902l-3.908-2.137c-0.859,1.83-2.389,3.158-4.956,3.611c-2.996,0.527-6.026-1.145-6.755-4.015
    l15.614-2.753c-0.043-0.477-0.119-0.904-0.201-1.377c-1.303-7.398-6.147-10.382-11.882-9.371c-6.204,1.094-10.1,6.281-8.926,12.906
    c1.174,6.676,6.6,9.908,12.932,8.792C587.812,84.876,590.479,82.991,592.002,79.902z M580.551,67.718
    c3.338-0.59,5.245,1.461,5.712,4.109l-10.526,1.856C575.446,70.778,577.514,68.253,580.551,67.718z"/>
  <path fill="#D4002A" d="M595.346,103.349c-2.694,0.477-4.585,2.529-5.282,5.078l-0.081,0.018l-0.606-3.426l-4.911,0.871
    l3.609,20.529l5.137-0.906l-1.941-10.992c-0.262-1.494-0.074-5.678,4.551-6.488c0.469-0.084,0.907-0.117,1.623-0.066l-0.833-4.705
    C596.254,103.237,595.732,103.28,595.346,103.349z"/>
</g>
</svg>

</div>
<div class="cards-support">
  <div class="cards-txt"></div>
  <div class="cards-imgs">
  
  </div>
</div>
<div class="footer-block social-media">

    <div class="social-links">
          
          <ul>       
    <li>
         <a href="https://www.facebook.com/AvisMaroc/" target="_blank"  class="fb">
          <span class="is-visually-hidden">Facebook</span>
         </a>
    </li>
     <li>
         <a href="https://twitter.com/Avis" target="_blank"  class="tw">
          <span class="is-visually-hidden">Twitter</span>
         </a>
    </li>
            </ul>
     </div>
</div></section>    <input type="hidden" name="carResults" id="carResults" value="resultats-vehicule" />
    <input type="hidden" name="carReviewandPay" id="carReviewandPay" value="verification-et-paiement" />
    <input type="hidden" name="carConfirmation" id="carConfirmation" value="confirmation-de-reservation" />
</footer><script class="template-form-error" type="text/template">
    <div class="form-error <%= error.direction %>">
        <i class="large" data-icon="&#xe094;"></i>
        <div class="msg">
            <p role="alert">
                <em><%= error.message %></em>
                 <%= error.supporting %>
            </p>
        </div>
    </div>
</script>           </div>
            <div id="live-person-button"></div>
            <style>
                div#live-person-button { position: fixed; top: 124px; left: 0px; z-index: 2000;}
            </style>
        </div>
    </div>




     <script src="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/js/app.js?v=2.9.23" type="text/javascript"></script>
