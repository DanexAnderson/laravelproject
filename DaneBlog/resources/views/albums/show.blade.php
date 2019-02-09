@extends('layouts.app')

@section('content')
<div class='container '>



              <div id="">
                    <div class="row text-center ">

                      @if(count($photos)>0)
                          @foreach($photos as $photo)
                          <div class='col-lg-6 col-sm-6 col-12 d-flex align-content-around flex-wrap '>
                                  <a href="/albums/{{$photo->id}}">
                                  <img class="img-thumbnail  d-block w-100" src="{{asset($photourl.'/photos/')}}/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
                                    </a>
                                   <br>
                                   <h4>{{$photo->title}}</h4>
                          </div>
                          @endforeach
                          @endif
                    </div>
                  </div>



@endsection


@section('sidebar')
@parent

@if(Auth::user())
      <a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@else
     <a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>


@endsection
