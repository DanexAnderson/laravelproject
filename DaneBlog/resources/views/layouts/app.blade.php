<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="icon" type="image/gif" href="{{asset($photourl.'/icons/logo.png')}}" />

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com">-->
    <!--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">-->

    <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div id="app">
           <!------- Navbar page --------->
    @include('inc.navbar')



            @if(Request::is('/'))
            @include('inc.showcase')
            @endif

            <!------ Page Content Body ------->
    <main class='row'>

        <!----------------------- SideBar ---------------->
        <div class ="container col-md-12 col-lg-3">
    @include('inc.sidebar')


        </div>

        <!----------------------- Content Body ----------->
        <div class="container col-md-12 col-lg-8 py-0">

                <!----------- Error | Success Messages --------->
                @include('inc.messages')
            @yield('content')

    </div>

    </main>

    @if(Request::is('/') || Request::is('home') || Request::is('login')
     || Request::is('register') || Request::is('about') )
<footer class='container ' id='midcontent'>


    <div class="row col-12">
        <div class="col col-5 mr-1"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/webapp.png')}}" alt=""></div>
        <div class="col col-5 ml-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/mobileapp.jpeg')}}" alt=""></div>
      </div>
      <br>
      <div class="row spacey col-12">
        <div class="col col-3 mr-1"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/angular.png')}}" alt=""></div>
        <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/ionic.png')}}" alt=""></div>
        <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/laravel.png')}}" alt=""></div>

      </div>
      <br><br>
      <div class="row">
        <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/mysql.png')}}" alt=""></div>
        <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/nativescript.png')}}" alt=""></div>
         <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/meanstack2.png')}}" alt=""></div>
      </div>
      <br><br>
      <div class="row">
            <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/nodejs.png')}}" alt=""></div>
            <div class="col col-3 mr-1 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/php.png')}}" alt=""></div>

        <div class=""><img class="" src="{{ asset($photourl.'/WorkPlace/')}}" alt=""></div>

      </div>
      <br>


</footer>
@endif



</div>


    <!-- Scripts -->
   <!-- <script src="/js/app.js" type="text/javascript"></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

<footer id ="footer" class=" text-center">
    <p> copyright 2019 &copy; Dane Jason Anderson</p>
</footer>

</html>
