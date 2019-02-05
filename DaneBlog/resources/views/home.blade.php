@extends('layouts.app')

@section('content')

<!--<h1 class="text-primary text-center "><b>Home</b></h1>-->

@if(Request::is('home'))
<div class="container">


    <span class='float-right '> <a href='/listing/create' class='btn btn-outline-success btn-sm'><b>Create Client</b></a></span>
    <br/>.

    @if(count($listings))

    <div class="col-lg-9 col-md-12">
    <table class='table table-borderless table-striped  '>
        <tr>
            <th table-primary><h3><b>Companies</b></h3></th>

            <th></th>
            <th></th>

        </tr>
        @foreach ($listings as $listing)
        <tr>
            <td >{{$listing->name}}</td>

           <td><a href='/listing/{{$listing->id}}/edit' class='btn btn-outline-secondary float-right btn-sm'>Edit</a></td>

            <td>
                    {!! Form::open(['action' => ['ListingsController@destroy', $listing->id],
                    'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("Are you sure ?")']) !!}

                    {{ Form::hidden('_method','DELETE')}}

                     {{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}

                    {!! Form::close() !!}

            </td>

        </tr>
        @endforeach
    </table>
    @endif
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
          <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
          <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
        </b></div>
      </div>
@endsection
