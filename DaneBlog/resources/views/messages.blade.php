@extends('layouts.app')

@section('content')
<h1>Messages</h1>

@if(count($messages)>0)
    @foreach($messages as $message)
    <div class="card">
        <ul class="list-group ">

        <li class="list-group-item card-header bg-light">Name: {{$message->name}}</li>
        <li class="list-group-item card-header bg-light">Email: {{$message->email}}</li>
        <li class="list-group-item card-body">Message: {{$message->message}}</li>
        </ul>
        </div>
        <br/>
    @endforeach
@endif

@endsection

@section('sidebar')


<p> Post results </p>
@endsection
