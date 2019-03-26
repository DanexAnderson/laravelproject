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
        <div class =" col-md-12 col-lg-3  py-0">
    @include('inc.sidebar')


        </div>

        <!----------------------- Content Body ----------->
        <div class="container col-md-12 col-lg-8 py-0 ml-auto">

                <!----------- Error | Success Messages --------->
                @include('inc.messages')
            @yield('content')

    </div>

    </main>

    @if(Request::is('/') || Request::is('home') || Request::is('login')
     || Request::is('register') || Request::is('about') )
<footer class='container-fluid ' id='midcontent'>

<!------------------------------ Laptop web and Mobile phones Pics --------------------->
    <div class="row col-12">
        <div class="col-lg-5 py-4  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/webapp.png')}}" alt=""></div>
        <div class="col-lg-5 py-4  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/mobileapp.png')}}" alt=""></div>
      </div>

      <!-------------------------------- Development Frameworks Logos ----------------------->
      <br>
      <div class="row spacey col-12">
        <div class="col-6 col-lg-3  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/angular.png')}}" alt=""></div>
        <div class="col-6 col-lg-3  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/ionic.png')}}" alt=""></div>
        <div class="col-6 col-lg-3   ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/laravel.png')}}" alt=""></div>

      </div>
      <br><br>
      <div class="row">
        <div class="col-6 col-lg-3  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/mysql.png')}}" alt=""></div>
        <div class="col-6 col-lg-3 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/nativescript.png')}}" alt=""></div>
         <div class="col-6 col-lg-3  ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/meanstack2.png')}}" alt=""></div>
      </div>
      <br><br>
      <div class="row">
            <div class="col-6 col-lg-3 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/nodejs.png')}}" alt=""></div>
            <div class="col-6 col-lg-3 ml-auto"><img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/php.png')}}" alt=""></div>
            <div class="col-6 col-lg-3 ml-auto"><img class="d-block w-100 h-75" src="{{ asset($photourl.'/WorkPlace/flutter.png')}}" alt=""></div>

        <div class=""><img class="" src="{{ asset($photourl.'/WorkPlace/')}}" alt=""></div>

      </div>
      <br>


</footer>
@endif



</div>


    <!-- Scripts -->
   <!-- <script src="/js/app.js" type="text/javascript"></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>



    <footer  class="page-footer mt-5 font-small bg-light position-relative">

            <div id="footer" class="bg-primary py-0">
              <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                  <!-- Grid column -->
                  <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h4 class="mb-0 text-white">Get connected with me on social !</h4>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="nav-item" href='https://www.facebook.com/dane.X.Anderson'>
                    @svg('public/images/icons/facebook-square-brands', 'icon mr-4')
                    </a>

                   <!--Instagram-->
                   <a class="nav-item" href='https://www.instagram.com/danexanderson/?hl=en'>
                        @svg('public/images/icons/instagram-brands', 'icon mr-4')
                   </a>

                    <!--Linkedin -->
                    <a href="https://www.linkedin.com/in/dane-anderson-b17881109/" class="nav-item" >
                            @svg('public/images/icons/linkedin-brands', 'icon mr-4')
                    </a>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row-->

              </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

              <!-- Grid row -->
              <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                  <!-- Content -->
                  <h6 class="text-uppercase font-weight-bold text-primary">Dane Anderson Software Developer</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>Web and Mobile App Developer. Futuristic looking websites and mobile app designs. Awesome UI Designer.
                     Mobile First Approach.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold text-primary">Frameworks</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    Angular & Ionic
                  </p>
                  <p>
                    WordPress
                  </p>
                  <p>
                    Laravel
                  </p>
                  <p>
                    Flutter
                  </p>
                  <p>
                      Xamarin & .NET
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold text-primary">Languages</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    JAVA, C#
                  </p>
                  <p>
                    PHP, Nodejs
                  </p>
                  <p>
                    MsSQL, MySQL, MongoDB
                  </p>
                  <p>
                      HTML, CSS, JavaScript
                    </p>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold text-primary">Contact</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <i class="fas fa-home mr-3"></i>Kingston, Jamaica</p>

                    <p><i class="fas fa-envelope mr-3"></i> Email: </p>
                  <p class="ml-3">
                    <b> daneanderson16@gmail.com</b></p>


                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div id='footer2' class="footer-copyright text-center py-3 text-white bg-dark">
              Dane J. Anderson © 2019 Copyright :
              <a class="text-white pl-1" href="http://workplaceja.herokuapp.com"> workplaceja.herokuapp.com</a>
            </div>
            <!-- Copyright -->

          </footer>



</body>

</html>



