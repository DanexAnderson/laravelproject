@extends('layouts.app')

@section('content')


{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}

{{ Form::bsText('text', $todo->text)}}

{{ Form::bsTextArea('body', $todo->body)}}

{{ Form::bsText('due', $todo->due)}}

{{ Form::hidden('_method','PUT')}}

<!-- {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}} -->

{{ Form::bsSubmit('Submit')}}

{!! Form::close() !!}
@endsection

@section('sidebar')

@parent

<a class='btn btn-default text-primary' href='/todo'><h2><< Back </h2></a>


      <br/><br/>
<h1> Edit Todo</h1>

@endsection

