<div class="logo-box">

    <a href="https://www.avis.ma/" class="avis-logo" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="logo" url="https://avisassets.abgemea.com/resources/templating-kit/themes/avis-digital/img/schema-logo.png" />
        <span role="img"  aria-label="Avis car hire">
            <svg x="0px" y="0px" viewBox="480.014 487.143 86 24.152" enable-background="new 480.014 487.143 86 24.152"  xml:space="preserve">
                <desc itemprop="name">Avis location de voiture et véhicules utilitaires</desc>
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
        </span>
    </a>
</div>    

<div class="search-toggle nav-link"  >
    <a href="#toggle" class="toggle">
        <span>Rechercher</span>
        <i data-icon="&#xe017;"></i>
    </a>
</div>

<div class="layout-helper">
    <div id="primary-nav" class="primary-nav"  role="tabpanel" aria-labelledby="primary-nav-tab"  >
        <ul class="top-level-nav">
            <li tabindex="1">
                <a  href=""><span>Accueil</span><i data-icon="&#xe015;" data-icon-open="&#xe014;" aria-hidden="true"></i></a>
            </li>
            <li tabindex="2">
                <a  href="{{route('showVoiture')}}"><span>Nos véhicules</span><i data-icon="&#xe015;" data-icon-open="&#xe014;" aria-hidden="true"></i></a>
            </li> 
            <li tabindex="3">
                <a  href="#link"><span>Bons plans</span><i data-icon="&#xe015;" data-icon-open="&#xe014;" aria-hidden="true"></i></a>
            </li> 
            <li tabindex="4">
                <a  href="{{route('showContent')}}"><span>Ajouter une voiture</span><i data-icon="&#xe015;" data-icon-open="&#xe014;" aria-hidden="true"></i></a>
            </li> 
            <li tabindex="5">
                @if(Auth::user())
                <div class="your-avis nav-link"> 
                    <a href="" class="toggle" >
                        <span class="hidden-narrow">Bonjour {{Auth::user()->name}} <i class="far fa-user"></i></span>
                    </a>
                </div>    

                @else
                    <a href="{{route('home')}}" class="toggle" >
                        <span class="hidden-narrow">Me connecter</span>
                        <i data-icon="&#xe00c;"></i>
                    </a>
                @endif
            </li>
        </ul>
    </div> 

    <!-- Below script works/loads only in author/admin mode. Not in public -->
    <!-- Above script works/loads only in author/admin mode. Not in public --> 
</div>

<!-- Search Form -->
<div class="search-box">
    <form class="site-search" autocomplete="off" action="https://secure.avis.ma/resultat-de-recherche">
        <label for="header-site-search"><span class="is-visually-hidden">Search the Avis website</span> <i data-icon="&#xe017;" aria-hidden="true"></i></label>
        <div class="input-hold">
            <input type="search" class="search-input" id="header-site-search" name="header-site-search" value='' rel="search" maxlength="250" />
        </div>
        <div class="button-hold">
            <button type="submit" class="submit-button">Rechercher<i data-icon="&#xe004;" aria-hidden="true"></i></button>
        </div>
    </form>
</div>