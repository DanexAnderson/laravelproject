@extends('layouts.app')

@section('content')
<div class=' '>

<!------------------------ Album Cover Image ------------------------------->

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

   <!-------------------------------- Delete Button DropDown ------------------------------->

   @if(Auth::user()->id == $albums->user_id)
   <div class="dropdown ">
                    <a class="nav-link py-0 btn btn-default position-relative"  id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <h1 class='text-danger '><b>...</b></h1>
                   </a>



                   <div class="dropdown-menu bg-transparent" aria-labelledby="dropdownMenu2">

                    {!! Form::open(['action'=> ['PhotosController@destroy',$photo->id], 'method' => 'POST' , 'onsubmit' => 'return confirm("Are you sure ?")'])!!}

                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete Photo', ['class' => 'btn btn-default  btn-outline-danger btn-sm btn-block'])}}
                     <!--<button class="dropdown-item text-danger" type="button">Delete</button>-->


                     {!! Form::close()!!}
                   </div>
                 </div>
                 @endif

<!------------------------------------------------- Album Photos -------------------------------->

     <div class='col-lg-12 col-12 col-sm-8 '>

        <img class="img-thumbnail d-block w-100 h-75"
            src="{{asset($photourl.'/photos/')}}/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">

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
