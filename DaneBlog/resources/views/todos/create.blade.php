@extends('layouts.app')

@section('content')
<div class='container'>
<br/>

<h4 class="col-lg-9 col-md-12 ">
{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}

{{ Form::bsText('text')}}

{{ Form::bsTextArea('body')}}

{{ Form::bsText('due')}}

<!-- {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])}} -->

{{ Form::bsSubmit('Submit')}}

{!! Form::close() !!}

</h4>
</div>
@endsection

@section('sidebar')
<div class='container'>
@parent
<br/>
<h2> Create Todo</h2>
</div>
@endsection
