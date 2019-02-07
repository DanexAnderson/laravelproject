<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link rel="icon" type="image/gif" href="{{asset('storage/icons/logo.png')}}" />

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
        <div class =" col-md-12 col-lg-3">
    @include('inc.sidebar')

        </div>

        <!----------------------- Content Body ----------->
        <div class="container col-md-12 col-lg-8 py-0">

                <!----------- Error | Success Messages --------->
                @include('inc.messages')
            @yield('content')

    </div>

    </main>



<footer id ="footer" class="text-center">
    <p> copyright 2019 &copy; Dane Jason Anderson</p>
</footer>

</div>


    <!-- Scripts -->
   <!-- <script src="/js/app.js" type="text/javascript"></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
