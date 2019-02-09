@extends('layouts.app')

@section('content')
<div class=' '>


        <a class='btn btn-outline-primary' href='/photos/create/{{$albums->id}}'><b>Upload Photo to Album </b></a>
        <hr/><br/>
        <h1>{{ucfirst($albums->name)}}</h1>

        <div class='col-lg-6 col-sm-6 col-12 d-flex align-content-around flex-wrap '>
                <a >
                    <img class="img-thumbnail"  src="{{asset($photourl.'/album_covers/')}}/{{$albums->cover_image}}" alt="{{$albums->name}}">

                  </a>
                 <br>

                 </div>
<hr/><br/>

<div id="">
        <div class="text-center row">

          @if(count($albums->photos)>0)
              @foreach($albums->photos as $photo)
              <div class='col-lg-12 col-12 col-sm-8 '>

                      <img class="img-thumbnail d-block w-100"  src="{{asset($photourl.'/photos/')}}/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
<h4>{{$photo->title}}</h4>
              </div>

              @endforeach
              @endif
        </div>
      </div>



        </div>


@endsection


@section('sidebar')


@if(Auth::user())
<a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@else
<a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>


@endsection
