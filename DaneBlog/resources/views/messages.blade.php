@extends('layouts.app')

@section('content')
<h1 class='container'>Messages</h1>

@if(count($messages)>0)
    @foreach($messages as $message)
    <div class='col-lg-9 col-md-12'>
    <div class="card  ">
        <ul class="list-group ">

        <li class="list-group-item card-header text-white bg-info"><b>Name: {{$message->name}}</b></li>
        <li class="list-group-item card-header bg-light">Email: {{$message->email}}</li>
        <li class="list-group-item card-body">Message: {{$message->message}}</li>
        </ul>
        </div>
        </div>
        <br/>
    @endforeach
@endif

@endsection

@section('sidebar')


@if(Auth::user())
    <a class='btn btn-default text-primary ' onclick="window.history.back();" >

        <img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@else
<a class='btn btn-default text-primary' href='/'><h3><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>
@parent

@stop
