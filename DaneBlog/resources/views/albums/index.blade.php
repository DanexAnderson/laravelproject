@extends('layouts.app')

@section('content')


<span class='float-right '> <a href='/albums/create' class='btn btn-outline-success btn-sm'><b>Create Album</b></a></span>
        <br/>
<!---------------------------- Album Covers --------------------------->

    <h3>Albums</h3>


    <div id="albums">
      <div class="row text-center ">

        @if(count($albums)>0)
            @foreach($albums as $album)
            <div class='col-lg-4 col-sm-4 col-12  flex-wrap '>
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


        <!----------------------------------------------

    @if(count($albums) > 0)
    <?php
    $colcount = count($albums);
      $i = 1;
  ?>
        @foreach($albums as $album)
          @if($i == $colcount)
             <div class='col-lg-4 col-sm-6 col d-flex align-content-around flex-wrap  end'>
               <a href="/albums/{{$album->id}}">
                  <img class="img-thumbnail " src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
               <br>
               <h4>{{$album->name}}</h4>
          @else
            <div class='col-lg-4 col-sm-6 col d-flex align-content-around flex-wrap '>
              <a href="/albums/{{$album->id}}">
                <img class="img-thumbnail " src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
              </a>
              <br>
              <h4>{{$album->name}}</h4>
          @endif
        	@if($i % 3 == 0)
          </div></div><div class="row text-center">
        	@else
            </div>
          @endif
        	<?php $i++; ?>
        @endforeach
      </div>
    </div>
  @else
    <p>No Albums To Display</p>
  @endif
---------------------------------------------------->


@endsection


@section('sidebar')


@endsection
