@extends('layouts.app')

@section('content')
<div class='container'>
<div class='col-lg-9 col-md-12'>

<h3>Upload Photo</h3>

{!! Form::open(['action' => 'PhotosController@store', 'method' => 'POST' , 'enctype' => 'multipart/form-data'    ]) !!}
{{Form::bsText('title', '', ['placeholder' => 'Photo Title'])}}
{{Form::bsTextArea('description','',['placeholder' => 'Photo Description'])}}
{{Form::hidden('album_id', $album_id)}}
{{Form::bsFile('photo')}}
{{Form::bsSubmit('submit')}}
{!! Form::close() !!}

</div>
</div>
@endsection


@section('sidebar')
@parent

@if(Auth::user())
<a class='btn btn-default ' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@else
<a class='btn btn-default ' onclick="window.history.back();"><img width='50px' src='{{asset($photourl.'/icons/backbutton.png')}}'/></a>
@endif
<br/><br/>

@endsection
