@extends('layouts.app')

@section('content')
<div class=' '>


        <div id="albums">
                <div class="row text-center ">

                  @if(count($user->albums)>0)
                      @foreach($user->albums as $album)
                      <div class='col-lg-4 col-sm-4 col-12 d-flex align-content-around flex-wrap '>
                              <a href="/albums/{{$album->id}}">
                                  <img class="img-thumbnail " src="{{asset('storage/album_covers/')}}/{{$album->cover_image}}" alt="{{$album->name}}">
                                </a>
                               <br>
                               <h4>{{$album->name}}</h4>
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
