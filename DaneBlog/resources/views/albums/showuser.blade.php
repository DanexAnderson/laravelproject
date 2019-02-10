@extends('layouts.app')

@section('content')




                <div class="row text-center py-0">


                  @if(count($albums)>0)
                      @foreach($albums as $album)



                      <div class='col-lg-4 col-sm-4 col-12 mb-5 flex-wrap '>

            <!-------------------------------- Delete Button DropDown ------------------------------->

                @if(Auth::user()->id == $album->user_id)
                <div class="dropdown ">
               <a class="nav-link ml-0 py-0 btn btn-default position-relative"  id="dropdownMenu2"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <h1 class='text-danger ml-0'><b>...</b></h1>
              </a>



              <div class="dropdown-menu bg-white py-0" aria-labelledby="dropdownMenu2">

               {!! Form::open(['action'=> ['AlbumsController@destroy',$album->id], 'method' => 'POST' , 'onsubmit' => 'return confirm("Are you sure ?")'])!!}

               {{Form::hidden('_method','DELETE')}}
               {{Form::submit('Delete Photo', ['class' => 'btn btn-default  btn-outline-danger btn-sm btn-block'])}}
                <!--<button class="dropdown-item text-danger" type="button">Delete</button>-->


                {!! Form::close()!!}
              </div>
            </div>
            @endif


                              <a href="/albums/{{$album->id}}">
                                  <img class="img-thumbnail d-block w-100 py-0 h-75" src="{{asset($photourl.'/album_covers/')}}/{{$album->cover_image}}" alt="{{$album->name}}">
                                </a>
                               <br>
                               <h4>{{$album->name}}</h4>
                      </div>
                      @endforeach
                      @endif
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
