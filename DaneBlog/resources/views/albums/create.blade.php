@extends('layouts.app')

@section('content')
<div class='col-lg-9 col-md-12'>

<h3>Create Album</h3>

{!! Form::open(['action' => 'AlbumsController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data'    ]) !!}
{{Form::bsText('name', '', ['placeholder' => 'Album Name'])}}
{{Form::bsTextArea('description','',['placeholder' => 'Album Description'])}}
{{Form::bsFile('cover_image')}}
{{Form::bsSubmit('submit')}}
{!! Form::close() !!}

</div>

@endsection


@section('sidebar')
@parent

@if(Auth::user())
<a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@else
<a class='btn btn-default text-primary' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>

@endsection
