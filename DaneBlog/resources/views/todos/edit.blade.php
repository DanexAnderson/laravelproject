@extends('layouts.app')

@section('content')



<h4 class="col-lg-9 col-md-12 ">

{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}

{{ Form::bsText('text', $todo->text)}}

{{ Form::bsTextArea('body', $todo->body)}}

{{ Form::bsText('due', $todo->due)}}

{{ Form::hidden('_method','PUT')}}

<!-- {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}} -->

{{ Form::bsSubmit('Submit')}}

{!! Form::close() !!}

</h4>
@endsection

@section('sidebar')

@parent

<a class='btn btn-default text-primary' href='{{url()->previous()}}'><h3><img width='50px' src='{{asset('storage/icons/backbutton.png')}}'/></a>


      <br/><br/>
<h1> Edit Todo</h1>

@endsection

