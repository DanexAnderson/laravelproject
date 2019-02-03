<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title> Bloggers</title>
    <link rel="stylesheet" href="/css/app.css">
<!--<link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet">-->
</head>
<body>
        <!------- Navbar page --------->
    @include('inc.navbar')
    <div class="container">

        @if(Request::is('/'))
        @include('inc.showcase')
        @endif

<div class='row'>

    <div class ="col-md-4 col-lg-4">
@include('inc.sidebar')


    </div>

    <div class ="col-md-8 col-lg-8">
@include('inc.messages')
        <br/>
        @yield('content')



    </div>

</div>






</div>

<footer id ="footer" class="text-center">
    <p> copyright 2019 &copy; DaneBlog</p>
</footer>

<script src="/js/app.js" type="text/javascript"></script>
<!--<script src="{{asset('js/app.js')}}" type="text/javascript"></script>-->
</body>

</html>
