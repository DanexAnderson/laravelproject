@extends('layouts.app')

@section('content')
<h1>Post</h1>

{!! Form::open(['url' => 'contact/submit']) !!}


<div class="form-group">
    {{Form::label('name', 'Name')}}
    {{ Form::text('name', '', ['class' => 'form-control','placeholder' => 'Enter Name'])}}
    </div>

<div class="form-group">
    {{Form::label('email', 'E-Mail Address')}}
    {{Form::text('email', '',['class' => 'form-control','placeholder' => 'example@gmail.com'])}}
</div>

<div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '',['class' => 'form-control','placeholder' => 'Enter Message'])}}
    </div>

<div>
    {{Form::submit('submit',['class' => 'btn btn-success'])}}
</div>

{!! Form::close() !!}

@endsection

<!----- -------------------Side Panel -------------->

@section('sidebar')

<!--  @parent -->

<p> Add Contact and Message</p>
@endsection
