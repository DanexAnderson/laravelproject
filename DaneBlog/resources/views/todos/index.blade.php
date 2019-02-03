@extends('layouts.app')
@section('content')

<h1 class="text-success">Todos</h1><br/>

@if(count($todos) > 0)
    @foreach($todos as $todo)
    <div class="card">
    <div class="card-body">

    <h4 ><a href='todo/{{$todo->id}}'> <b class='pr-3'>{{$todo->text}}</b>
    <span class="badge badge-danger "><h5>{{$todo->due}}</h5></span>
    </a>
    </h4>

    </div>
</div><br/>
    @endforeach
@endif

@endsection

@section('sidebar')


@parent

<h2>List of Todos</h2>

@endsection
