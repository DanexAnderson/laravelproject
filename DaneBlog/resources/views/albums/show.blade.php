@extends('layouts.app')

@section('content')
<div class='container '>

    <!-------------------------------------------- All Albums Cover Pics      d-flex align-content-around----------------------------->
        <div id="albums">
                <div class="row text-center ">

                  @if(count($albums)>0)
                      @foreach($albums as $album)
                      <div class='col-12 col-lg-4 col-sm-8   flex-wrap '>
                              <a href="/albums/{{$album->id}}">
                                  <img class="img-thumbnail d-block w-100 h-75 py-2" src="{{asset($photourl.'/album_covers/')}}/{{$album->cover_image}}" alt="{{$album->name}}">
                                </a>
                               <br>
                               <h4>{{$album->name}}</h4>
                      </div>
                      @endforeach
                      @endif
                </div>
              </div>
              <br/><hr/><br/>

              <!---------------------------------------- All Photos in Albums --------------------------------------->

        <div id="">
                <div class="row text-center ">

                    @if(count($albums)>0)
                    @foreach($albums as $album)
                  @if(count($album->photos)>0)
                      @foreach($album->photos as $photo)
                      <div class='col-lg-6 col-sm-10 col-12 flex-wrap py-2'>
                              <a href="/albums/{{$photo->id}}">
                              <img class="img-thumbnail d-block w-100 h-75 py-2"
                              src="{{asset($photourl.'/photos/')}}/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}"/>
                                </a>
                               <br>
                               <h4>{{$photo->title}}</h4>
                      </div>
                      @endforeach
                      @endif

                      @endforeach
                      @endif
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
