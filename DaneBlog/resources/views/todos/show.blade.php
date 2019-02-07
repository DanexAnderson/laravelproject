@extends('layouts.app')

@section('content')

<br/>

<div class="col-lg-9 col-md-12 ">

<div class='card bg-light add mb-1'>

<h2 class='card-title pl-3 pt-2'>{{$todo->text}}<hr/></h2>

<div class="card-body "><h5>{{$todo->body}}</h5></div>
<br/>
<div class="badge badge-warning "><h5>{{$todo->due}}</h5></div>

</div>


@if(Auth::user()->id == $todo->user_id)

<a href="/todo/{{$todo->id}}/edit" class="btn btn-outline-secondary btn-sm">Edit</a>

{!! Form::open(['action' => ['TodosController@destroy', $todo->id],
 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("Are you sure ?")']) !!}

{{ Form::hidden('_method','DELETE') }}
{{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger btn-sm'])}}

{!! Form::close() !!}

@endif
</div>
@endsection


@section('sidebar')

@parent

<a class='btn btn-default text-primary ' href='{{url()->previous()}}'><h3><img width='50px' src='{{asset('storage/icons/backbutton.png')}}'/> </a>


      <br/><br/>
<h1> What to do</h1>

@endsection
