
<!DOCTYPE html>


<!--[if IE 7 ]><html lang="fr-MA"  class="no-js ie7 lt-ie8 lt-ie9 lt-ie10 ltr"><![endif]-->
<!--[if IE 8 ]><html lang="fr-MA"  class="no-js ie8 lt-ie9 lt-ie10 ltr"><![endif]-->
<!--[if IE 9 ]><html lang="fr-MA"  class="no-js ie9 lt-ie10 ltr"><![endif]-->
<!--[if IEMobile 7 ]><html lang="fr-MA"  class="no-js iem7 ltr"><![endif]-->
<!--[if (gt IE 9)|!(IE)|(gt IEMobile 7)|!(IEMobile) ]><!--><html lang="fr-MA"  class="no-js"><!--<![endif]-->


 <html lang="fr-MA"  class="no-js">


<head>
    @yield('head')


</head>

<body class="branch-location content-page">
    <header class="site-header">
     @yield('header')   
     </header>
    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
        @yield('content')

       @yield('footer')  



</body>

</html>