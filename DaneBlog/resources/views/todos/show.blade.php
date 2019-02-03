@extends('layouts.app')

@section('content')

<div class='card bg-light'>

<h2 class='card-title pl-3 pt-2'>{{$todo->text}}<hr/></h2>

<div class="card-body "><h5>{{$todo->body}}</h5></div>
<br/>
<div class="badge badge-danger "><h5>{{$todo->due}}</h5></div>

</div>
<br/>

<a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a>

{!! Form::open(['action' => ['TodosController@destroy', $todo->id],
 'method' => 'POST', 'class' => 'float-right']) !!}

{{ Form::hidden('_method','DELETE') }}
{{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger'])}}

{!! Form::close() !!}


@endsection


@section('sidebar')

@parent

<a class='btn btn-default text-primary' href='/todo'><h2><< Back </h2></a>


      <br/><br/>
<h1> What to do</h1>

@endsection
