@extends('layouts.app')

@section('content')
<div class='jumbotron text-lg-center col-lg-10 '>
<h1>About</h1>
<p class=""> This website was developed by Dane J. Anderson,
    a Computer Science graduate of the University of Technology, Jamaica.
    He is a Software Developer who applies his trade and skills in Web and Mobile
    Applications development.
</p>

<p> His Frameworks of choice for web are: <b>Angular</b> for Progressive
    Web App development and <b>Laravel</b> for PHP, multi-page websites. Framework of choice for mobile
    development are: <b>Ionic ^4</b> for hybrid web and mobile Apps, and <b>NativeScript</b> for mobile only iOS
    and Android Apps. Other Framework of Knowledge are Vuejs and Xamarin. He is able to program in any Framework or language required.

</p>
<p>
    Knowledgable in backend technologies such as <b>Nodejs</b> and <b>PHP</b>, utilizing <b>Database</b> technologies
    such as <b>MsSQL</b>, <b>MySQL</b> and <b>Mongodb</b>.

</p>
<p>
    <b>Motto: </b> One day at a time. Every step taken is a step closer to your goals.

</p>

</div>
@endsection

@section('sidebar')
<br/>


@parent

<div class="row col-12 card ml-2">
        <div class="col col-12 ml-1 card-body"><img class="d-block w-100" src="{{ asset('storage/WorkPlace/aboutpic2.jpg')}}" alt=""></div>
<h4 class='card-title'> Dane Anderson</h4>
      </div>
      <br><br/>


@endsection
