@extends('layouts.app')

@section('content')

<!--<h1 class="text-primary text-center "><b>Home</b></h1>-->

@if(Request::is('home'))
<div class="container">


    <span class='float-right '> <a href='/listing/create' class='btn btn-outline-success btn-sm'><b>Create Client</b></a></span>
    <br/>

    @if(count($listings))

    <div class="col-lg-9 col-md-12">
    <table class='table table-borderless table-striped '>
        <tr>
            <th ><h3><b class='text-info'>Companies</b></h3></th>

        </tr>
        @foreach ($listings as $listing)
        <tr>
            <td >
                <ul class='list-inline '>
                    <li class='list-inline-item'>
                    <a href={{'#a'.$listing->id}} class="text-dark "
                         data-toggle="collapse"><h5><b>{{$listing->name}}</b></h5></a>
                    </li>

                    <li class='list-inline-item mr-auto float-right'>
                      {!! Form::open(['action' => ['ListingsController@destroy', $listing->id],
                     'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("Are you sure ?")']) !!}

                    {{ Form::hidden('_method','DELETE')}}

                     {{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}

                    {!! Form::close() !!}
                    </li>

                    <li class='list-inline-item mr-2 float-right'>
                            <a href='/listing/{{$listing->id}}/edit'
                            class='btn btn-outline-secondary float-right btn-sm'>Edit</a>
                        </li>


                </ul>

                    <div id={{'a'.$listing->id}} class="collapse">

                        <ul class="list-group">
                        <li class="list-group-item"><b class='pr-5'>Email:</b> {{$listing->email}}</li>
                        <li class="list-group-item"><b class='pr-4'>website:</b> {{$listing->website}}</li>
                        <li class="list-group-item"><b class='pr-4'>Address:</b> {{$listing->address}}</li>
                        <li class="list-group-item"><b class='pr-5'>Phone:</b> {{$listing->phone}}</li>
                        <li class="list-group-item"><b class='pr-5'>Bio:</b> {{$listing->bio}}</li>
                        </ul>

                    </div>


            </td>


        </tr>
        @endforeach
    </table>
    @endif

@else
<!------------------------------------- Landing Page ---------------------->

<!---------------------- Slide Show ----------------------------->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/gif6.gif')}}" alt="Gif 6" >
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/office2.jpg')}}" alt="office Toon Two">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset($photourl.'/WorkPlace/gif5.gif')}}" alt="Gif 5">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"src="{{ asset($photourl.'/WorkPlace/office1.jpg')}}" alt="office Toon one" >
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!---------------------------------- End Slide ------------------------------------->

</div>

</div>
@endif

<!----------------------------------- End Content Section -------------------------->
@endsection

@section('sidebar')
<br/><br/>
@parent


<h3><b>Features</b></h3><br/>

<!--<p> <a class='btn btn-primary' href="/messages"> View Post </a></p>-->

<div class="container border-right " id="sidebar-wrapper">
        <div class="sidebar-heading "></div>
        <div class="list-group list-group-flush "><b >
          <a href="/messages" class=" list-group-item list-group-item-action bg-light">View Post Messages</a>
          <a href="/todo" class="list-group-item list-group-item-action bg-light">View Todo List</a>
          <a href="/albums/showall" class="list-group-item list-group-item-action bg-light">Photo Gallary</a>

        </b></div>
      </div>
@endsection
