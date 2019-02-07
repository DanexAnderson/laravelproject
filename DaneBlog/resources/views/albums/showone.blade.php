@extends('layouts.app')

@section('content')
<div class=' '>


        <a class='btn btn-outline-primary' href='/photos/create/{{$albums->id}}'><b>Upload Photo to Album </b></a>
        <hr/><br/>
        <h1>{{ucfirst($albums->name)}}</h1>

        <div class='col-lg-6 col-sm-6 col-12 d-flex align-content-around flex-wrap '>
                <a >
                    <img class="img-thumbnail " src="{{asset('storage/album_covers/')}}/{{$albums->cover_image}}" alt="{{$albums->name}}">

                  </a>
                 <br>

                 </div>
<hr/><br/>

<div id="albums">
        <div class="row text-center ">

          @if(count($albums->photos)>0)
              @foreach($albums->photos as $photo)
              <div class='col-lg-12 col-sm-6 col-12 d-flex align-content-around flex-wrap '>

                      <img class="img-thumbnail " src="{{asset('storage/photos/')}}/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">

                       <br>
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
<a class='btn btn-default text-primary' href='{{url()->previous()}}'><img width='50px' src='{{asset('storage/icons/backbutton.png')}}'/></a>
@else
<a class='btn btn-default text-primary' href='{{url()->previous()}}'><img width='50px' src='{{asset('storage/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>


@endsection
