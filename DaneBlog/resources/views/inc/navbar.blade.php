<!--
<nav class="navbar navbar-expand-lg navbar-light bg-primary py-0 fixed-top" id='navbar'">
            <a class="navbar-brand leftmargin text-white" href="#">WorkPlace</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarNavDropdown" class="navbar-collapse collapse leftmargin">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                        navItem  {{Request::is('/') ? 'active1': ''}}" href="/">Home </a>
                    </li>
                    <li class="nav-item ">
                        <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                        navItem  {{Request::is('contact') ? 'active1': ''}}" href="/contact">Post <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                        navItem  {{Request::is('todo/create') ? 'active1': ''}}" href="/todo/create">Todo</a>
                    </li>
                    <li class="nav-item">
                            <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                            navItem  {{Request::is('about') ? 'active1': ''}}" href="/about">About</a>
                        </li>


                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white navItem pl-3 pl-lg-2 mr-5 mr-lg-0" href="#" id="navbarDropdownMenuLink"
                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item text-primary  pl-3 pl-lg-2  mr-5 mr-lg-0" href="#">Action</a>
                            <a class="dropdown-item  text-primary  pl-3 pl-lg-2  mr-5 mr-lg-0" href="#">Another action</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white navItem pl-3 pl-lg-2 mr-5 mr-lg-0" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white navItem pl-3 pl-lg-2  mr-5" href="{{ url('/register') }}">Register</a>
                    </li>
                </ul>
            </div>

        </nav>

    -->


 <nav class="navbar navbar-expand-lg navbar-light bg-primary navbar-laravel py-0 fixed-top" id='navbar'>

            <!--<div class="container">-->

                <a class="navbar-brand text-white leftmargin"
                href="{{ url('/') }}">
                    {{ config('app.name', 'WorkPlace') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse leftmargin" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                            <li class="nav-item ">
                                    <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                                    navItem  {{Request::is('home') ? 'active1': ''}}" href="/home">Home </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                                    navItem  {{Request::is('contact') ? 'active1': ''}}" href="/contact">Post <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                                    navItem  {{Request::is('todo/create') ? 'active1': ''}}" href="/todo/create">Todo</a>
                                </li>
                                <li class="nav-item">
                                        <a class="text-white nav-link active pl-3 pl-lg-2 mr-5 mr-lg-0
                                        navItem  {{Request::is('about') ? 'active1': ''}}" href="/about">About</a>
                                    </li>


                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">

                                <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle text-white navItem pl-3 pl-lg-2 mr-5 mr-lg-0" href="#" id="navbarDropdownMenuLink"
                                         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Dropdown
                                        </a>
                                        <div class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item text-primary  pl-3 pl-lg-2  mr-5 mr-lg-0" href="#">Action</a>
                                            <a class="dropdown-item  text-primary  pl-3 pl-lg-2  mr-5 mr-lg-0" href="#">Another action</a>
                                        </div>
                                    </li>

                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-white pl-3 navItem pl-lg-2 mr-5 mr-lg-0 {{Request::is('login') ? 'active1': ''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link text-white pl-3 navItem  pl-lg-2 mr-5 {{Request::is('register') ? 'active1': ''}}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle navItem pl-lg-2 mr-5 text-white" href="#" role="button" data-toggle="dropdown"
                                     aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item pl-lg-2 mr-5 text-primary" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                <!--</div>-->
            </nav>

       <br/><br/>
